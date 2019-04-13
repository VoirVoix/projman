<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $data = Status::all();
        return view('statuses.index', compact("data"));
    }

    public function create()
    {
        return view('statuses.detail');
    }

    public function store(Request $request)
    {
        $data = Status::create($request->all());
        return view('statuses.show', compact("data"));
    }

    public function show($id)
    {
        $data = Status::findOrFail($id);
        return view('statuses.detail', compact("data"));
    }

    public function edit($id)
    {
        $data = Status::findOrFail($id);
        return view('statuses.detail', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = Status::find($id)->update($request->all());
        return view('statuses.detail', compact("data"));
    }

    public function destroy($id)
    {
        $row = Status::findOrFail($id);
        $row->delete();
        $data = Status::all();
        return view('statuses.index', compact("data"));
    }
}
