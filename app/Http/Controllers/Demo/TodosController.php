<?php
namespace Laraspace\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laraspace\Http\Requests;
use Laraspace\Http\Controllers\Controller;
use Laraspace\Space\Demo\Todo;

class TodosController extends Controller
{
    /**
     * Todos Index
     *
     * @return View
     */
    public function index()
    {
        $todos = Todo::all();
        
        return view('admin.pages.todos.index')->with('todos', $todos);
    }

    /**
     * Save Todo
     *
     * @param Requests\TodosRequest $request
     * @return View
     */
    public function store(Requests\TodosRequest $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->completed = $request->completed;
        $todo->save();

        return response()->json([
            'message' => 'Todo Added Successfully',
            'todo' => $todo
        ], 200);
    }

    /**
     * Toggle the Todo
     *
     * @param $id
     * @param Request $request
     * @return View
     */
    public function toggleTodo($id, Request $request)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = $request->completed;
        $todo->save();

        return response()->json([
            'message' => 'Todo Marked as Complete',
        ], 200);
    }

    /**
     * Delete Todo
     *
     * @param $id
     * @return View
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return response()->json([
            'message' => 'Todo Deleted Successfully',

        ], 200);
    }
}
