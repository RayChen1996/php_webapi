<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        //retrun "681520";
        $todos = Todo::all();
        return response()->json(['todos' => $todos]);
        //return view('todos.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('todos.index');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        Todo::find($id)->update($request->all());
        return redirect()->route('todos.index');
    }

    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('todos.index');
    }
}
