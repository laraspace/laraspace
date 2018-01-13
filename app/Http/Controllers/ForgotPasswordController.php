<?php
namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Laraspace\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->subject = "Laraspace password Reset";
    }

    public function getEmail()
    {
        return view('admin.sessions.forgot-password.index');
    }

    public function postEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required']);
        $request->session()->put('email', $request->email);
        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                flash()->success('Password Reset link has been sent to your mail id');
                return redirect()->back()->with('status', 'No User Is asoociated with this account');
                
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }

    public function getReset($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        return view('admin.sessions.forgot-password.reset')->with('token', $token);
    }

    public function postReset(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6|max:16',
            'token' => 'required',
            'email' => 'required|email',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = User::where('email', \Session::get('email'))->first();
        $user->password = bcrypt($request->password);
        $user->save();
        \Auth::login($user, true);
        flash()->success('Your Password Updated Success Fully');
        
        return redirect()->route('home');
    }
}
