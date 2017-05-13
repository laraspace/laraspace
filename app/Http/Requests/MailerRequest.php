<?php

namespace Laraspace\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'host'=>'required',
            'port'=>'required',
            'from_user'=>'required',
            'from'=>'required|email',
            'username'=>'required',
            'password'=>'required',
        ];
    }
}
