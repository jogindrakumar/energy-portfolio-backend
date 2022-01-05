<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    //all project show

    public function AllProject(){
        $projects = Project::all();
        return view('admin.project.index',compact('projects'));
    }

    public function CreateProject(){
        return view('admin.project.create');
    }
    // add project




    public function AddProject(Request $request){
        $validatedData = $request->validate([
    'project_title' => ['required', 'unique:projects', 'min:4'],
    'project_img' => ['required', 'mimes:jpg,jped,png']
]);

$img = $request->file('project_img');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($img->getClientOriginalExtension());
$img_name = $name_gen.'.'.$img_ext;
$upload_location = 'images/project/';
$last_image = $upload_location.$img_name;
$img->move($upload_location,$img_name);

Project::insert([
        'project_title' => $request->project_title,
        'project_img'   =>$last_image,
        'created_at' => Carbon::now()
]);

return redirect()->route('project.section')->with('success','project add successfully!');
    }
}
