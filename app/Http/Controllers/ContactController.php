<?php

namespace App\Http\Controllers;

use App\Model\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

    }


    public function contact(Request $request)
    {
        $contact = new contact();
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        //Set Message
         \Session::flash('message','Sent your message successfuly');
        return redirect()->route('contact');
    }


    public function store(Request $request)
    {
        //
    }



     public function messageshow(){
         $contacts=contact::all();
         return view('layouts.pages.message')->with('contacts',$contacts);
     }
     public function messagedelete($id){
         $contacts=contact::find($id);
         $contacts->delete();
         return redirect()->route('messageshow');
        }
    public function show(contact $contact)
    {
        //
    }



    public function edit(contact $contact)
    {
        //
    }


    public function update(Request $request, contact $contact)
    {
        //
    }


    public function destroy(contact $contact)
    {
        //
    }
}
