<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //front end index
 public function AboutALL(){
        $abouts = About::all();
        return view('index',compact('abouts')); 
     }


    //admin 
    public function About(){
        $abouts = About::all();
        return view('admin.about.index',compact('abouts'));
    }
    

    // add about profile

    public function AddProfile(Request $request){
        $validatedData = $request->validate([
    'name' => ['required', 'unique:abouts', 'min:4'],
    'position' => ['required', 'max:50'],
    'twt_link' => ['required'],
    'git_link' => ['required'],
    'about' => ['required', 'max:500'],
    'img' => ['required', 'mimes:jpg,jped,png']
]);

$img = $request->file('img');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($img->getClientOriginalExtension());
$img_name = $name_gen.'.'.$img_ext;
$upload_location = 'images/profile/';
$last_image = $upload_location.$img_name;
$img->move($upload_location,$img_name);

About::insert([
        'name' => $request->name,
        'position' => $request->position,
        'twt_link' => $request->twt_link,
        'git_link' => $request->git_link,
        'about' => $request->about,
        'img'   =>$last_image,
        'created_at' => Carbon::now()
]);

return redirect()->back()->with('success','profile add successfully!');
    }



    // edit about profile 

    public function EditProfile($id){
        $abouts = About::find($id);
        return view('admin.about.edit',compact('abouts'));
    }

    // update about profile

    public function Update(Request $request , $id){

    }
}
