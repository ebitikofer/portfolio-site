<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller
{
    public function index() {
        $projects = Project::with('Photos')->get();
        return view('pages.portfolio')->with('projects', $projects);
    }

    public function create() {
        return view('pages.createProject');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('cover_image')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('cover_image')->storeAs('public/project_covers', $filenameToStore);

        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->cover_image = $filenameToStore;

        $project->save();

        return redirect('/portfolio')->with('success', 'Project Created');
    }

    public function show($id) {
        $project = Project::with('Photos')->find($id);
        return view('pages.show')->with('project', $project);
    }
}
