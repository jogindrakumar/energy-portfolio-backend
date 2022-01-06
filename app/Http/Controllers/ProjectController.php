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


    
    // edit project

    public function EditProject($id){
        $projects = Project::find($id);
        return view('admin.project.edit',compact('projects'));
    }

    // update project Project

    public function Update(Request $request , $id){
  $validatedData = $request->validate([
    'project_title' => ['required'],
    
]);
$project_img = $request->file('project_img');

if($project_img){
    $old_img = $request->old_img;
    $name_gen = hexdec(uniqid());
$img_ext = strtolower($project_img->getClientOriginalExtension());
$img_name = $name_gen.'.'.$img_ext;
$upload_location = 'images/project/';
$last_image = $upload_location.$img_name;
$project_img->move($upload_location,$img_name);
unlink($old_img);

Project::find($id)->update([
        'project_img'   =>$last_image,
        'updated_at' => Carbon::now()
]);

return redirect()->route('project.section')->with('success','project photo updated successfully!');
}else{
    Project::find($id)->update([
        'project_title' => $request->project_title,
        'updated_at' => Carbon::now()
]);

return redirect()->route('project.section')->with('success','project title updated successfully!');
}

    }


    // Delete project function 

    public function DeleteProject($id){
        $img = Project::find($id);
        $old_img = $img->project_img;
        unlink($old_img);
        Project::find($id)->delete();
       return redirect()->route('project.section')->with('error','project delete successfully');
    }
}
