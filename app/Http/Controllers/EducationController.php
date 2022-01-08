<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Education;

class EducationController extends Controller
{
    //
     //
     //all Education show

    public function AllEducation(){
        $educations = Education::all();
        return view('admin.education.index',compact('educations'));
    }

    public function CreateEducation(){
        return view('admin.education.create');
    }
    // add education

    public function AddEducation(Request $request){
        $validatedData = $request->validate([
    'title' => ['required', 'min:4'],
    'from' => ['required'],
]);



Education::insert([
        'title' => $request->title,
        'from'   =>$request->from,
        'created_at' => Carbon::now()
]);

return redirect()->route('education.section')->with('success','education add successfully!');
    }


    
    // edit education

    public function EditEducation($id){
        $educations = Education::find($id);
        return view('admin.education.edit',compact('educations'));
    }

    // update education education

    public function Update(Request $request , $id){
 
        Education::find($id)->update([
        'title' => $request->title,
        'from'   =>$request->from,
        'updated_at' => Carbon::now()
        ]);
        return redirect()->route('education.section')->with('success','education updated successfully!');

    }


    // Delete education function 

    public function DeleteEducation($id){
        Education::find($id)->delete();
       return redirect()->route('education.section')->with('error','Education delete successfully');
    }
}
