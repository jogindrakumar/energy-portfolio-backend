<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Skill;

class SkillController extends Controller
{
    //
     //all skill show

    public function AllSkill(){
        $skills = Skill::all();
        return view('admin.skill.index',compact('skills'));
    }

    public function CreateSkill(){
        return view('admin.skill.create');
    }
    // add Skill

    public function AddSkill(Request $request){
        $validatedData = $request->validate([
    'title' => ['required', 'min:3'],
    'level' => ['required'],
]);



Skill::insert([
        'title' => $request->title,
        'level'   =>$request->level,
        'created_at' => Carbon::now()
]);

return redirect()->route('skill.section')->with('success','skill add successfully!');
    }


    
    // edit skill

    public function EditSkill($id){
        $skills = Skill::find($id);
        return view('admin.skill.edit',compact('skills'));
    }

    // update skill skill

    public function Update(Request $request , $id){
 
        Skill::find($id)->update([
        'title' => $request->title,
        'level'   =>$request->level,
        'updated_at' => Carbon::now()
        ]);
        return redirect()->route('skill.section')->with('success','skill updated successfully!');

    }


    // Delete skill function 

    public function DeleteSkill($id){
        Skill::find($id)->delete();
       return redirect()->route('skill.section')->with('error','skill delete successfully');
    }
}
