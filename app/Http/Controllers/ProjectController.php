<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::all();
        return view('projects.index', compact("data"));
    }

    public function create()
    {
        return view('projects.detail');
    }

    public function store(Request $request)
    {
        $data = Project::create($request->all());
        return view('projects.show', compact("data"));
    }

    public function show($id)
    {
        $data = Project::findOrFail($id);
        return view('projects.detail', compact("data"));
    }

    public function edit($id)
    {
        $data = Project::findOrFail($id);
        return view('projects.detail', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = Project::find($id)->update($request->all());
        return view('projects.detail', compact("data"));
    }

    public function destroy($id)
    {
        $row = Project::findOrFail($id);
        $row->delete();
        $data = Project::all();
        return view('projects.index', compact("data"));
    }
}
