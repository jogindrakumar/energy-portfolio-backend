<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Contact;

class ContactController extends Controller
{
    //
       //all contact show

    public function AllContact(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function CreateContact(){
        return view('admin.contact.create');
    }
    // add contact

    public function AddContact(Request $request){
        $validatedData = $request->validate([
        'email' => ['required'],
        'subject' => ['required'],
        'message' => ['required'],
    ]);



    Contact::insert([
            'email' => $request->email,
            'subject'   =>$request->subject,
            'message'   =>$request->message,
            'created_at' => Carbon::now()
    ]);

return redirect()->back()->with('success','Message  send successfully!');
    }


    
    // edit contact

    // public function Editcontact($id){
    //     $contacts = Contact::find($id);
    //     return view('admin.contact.edit',compact('contacts'));
    // }

    // // update contact contact

    // public function Update(Request $request , $id){
 
    //     Contact::find($id)->update([
    //     'title' => $request->title,
    //     'level'   =>$request->level,
    //     'updated_at' => Carbon::now()
    //     ]);
    //     return redirect()->route('contact.section')->with('success','contact updated successfully!');

    // }


    // Delete contact function 

    public function DeleteContact($id){
        Contact::find($id)->delete();
       return redirect()->route('contact.section')->with('error','Message delete successfully');
    }
}
