<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {        
        $todo = Todo::all();
        return view('todo')->with('todo', $todo);
    }

    public function edit(Request $request, Todo $id)
    {
        $todo = Todo::all();
        $todo_edit = Todo::find($id);
        return view('todo')->with('todo', $todo)->with('todo_edit', $todo_edit);
    }

    public function update(Request $request)
    {
        $id_todo = $request->input('id_todo');
        $todo_item = $request->input('todo_item');
        $todo = Todo::find($id_todo);
        $todo->item = $todo_item;
        $todo->save();
        
        return redirect('todo');
    }
        
    public function store(Request $request)
    {
        $todo_item = $request->input('todo_item');
        $todo = new Todo;
        $todo->item = $todo_item;
        $todo->save();
        
        return redirect('todo');
    }
    
    public function destroy(Request $request, Todo $id) 
    {
        $id->delete();
        
        return redirect('todo');
    }
}
