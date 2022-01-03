<?php

namespace App\Http\Controllers;
use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function About(){
        return view('admin.about.index');
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

    }
}
