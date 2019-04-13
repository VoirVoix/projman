<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $data = Task::all();
        return view('tasks.index', compact("data"));
    }

    public function create()
    {
        return view('tasks.detail');
    }

    public function store(Request $request)
    {
        $data = Task::create($request->all());
        return view('tasks.show', compact("data"));
    }

    public function show($id)
    {
        $data = Task::findOrFail($id);
        return view('tasks.detail', compact("data"));
    }

    public function edit($id)
    {
        $data = Task::findOrFail($id);
        return view('tasks.detail', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = Task::find($id)->update($request->all());
        return view('tasks.detail', compact("data"));
    }

    public function destroy($id)
    {
        $row = Task::findOrFail($id);
        $row->delete();
        $data = Task::all();
        return view('tasks.index', compact("data"));
    }
}
