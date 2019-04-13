<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $data = Activity::all();
        return view('activities.index', compact("data"));
    }

    public function create()
    {
        return view('activities.detail');
    }

    public function store(Request $request)
    {
        $data = Activity::create($request->all());
        return view('activities.show', compact("data"));
    }

    public function show($id)
    {
        $data = Activity::findOrFail($id);
        return view('activities.detail', compact("data"));
    }

    public function edit($id)
    {
        $data = Activity::findOrFail($id);
        return view('activities.detail', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = Activity::find($id)->update($request->all());
        return view('activities.detail', compact("data"));
    }

    public function destroy($id)
    {
        $row = Activity::findOrFail($id);
        $row->delete();
        $data = Activity::all();
        return view('activities.index', compact("data"));
    }
}
