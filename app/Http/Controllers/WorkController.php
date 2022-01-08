<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WorkController extends Controller
{
    //
     //all Work show

    public function AllWork(){
        $works = Work::all();
        return view('admin.work.index',compact('works'));
    }

    public function CreateWork(){
        return view('admin.work.create');
    }
    // add work

    public function AddWork(Request $request){
        $validatedData = $request->validate([
    'job_title' => ['required', 'min:4'],
    'from' => ['required'],
    'to' => ['required'],
    'job_description' => ['required','min:10'],
]);



Work::insert([
        'job_title' => $request->job_title,
        'from'   =>$request->from,
        'to'   =>$request->to,
        'job_description'   =>$request->job_description,
        'created_at' => Carbon::now()
]);

return redirect()->route('work.section')->with('success','work add successfully!');
    }


    
    // edit Work

    public function EditWork($id){
        $works = Work::find($id);
        return view('admin.work.edit',compact('works'));
    }

    // update work work

    public function Update(Request $request , $id){
 
        Work::find($id)->update([
        'job_title' => $request->job_title,
        'from'   =>$request->from,
        'to'   =>$request->to,
        'job_description'   =>$request->job_description,
        'updated_at' => Carbon::now()
        ]);
        return redirect()->route('work.section')->with('success','work updated successfully!');

    }


    // Delete Work function 

    public function DeleteWork($id){
        Work::find($id)->delete();
       return redirect()->route('work.section')->with('error','work delete successfully');
    }
}
