<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class ProjectController extends Controller
{
    public function create($project_id) {
        return view('project.create')->with('project_id', $project_id);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:1999'
        ]);

        $filenameWithExt = $request->file('photo')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('photo')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $path = $request->file('photo')->storeAs('public/photos/'.$request->input('project_id'), $filenameToStore);

        $photo = new Photo;
        $photo->project_id = $request->input('project_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $filenameToStore;

        $photo->save();

        return redirect('/portfolio/'.$request->input('project_id'))->with('success', 'Photo Created');
    }

    public function show($id) {
        $photo = Photo::find($id);
        return view('project.show')->with('photo', $photo);
    }

    public function destroy($id) {
        $photo = Photo::find($id);

        if(Storage::delete('public/photos/'.$photo->project_id.'/'.$photo->photo)) {
            return redirect('/portfolio/'.$photo->project_id)->with('success', 'Photo Deleted');
        }
    }

}
