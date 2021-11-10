<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Gallery;
class GalleryController extends Controller
{
    public function galleryadd(){
        return view('layouts.pages.galleryadd');
    }

    public function galleryinsert(Request $request){
       $gallery=new Gallery;
       $gallery->photo=$request->file('photo');
       $gallery->description=$request->description;

        if($gallery->photo){
        $photo_filename = $gallery->photo->getClientOriginalName();
        $gallery->photo->move(public_path('gallery'), $photo_filename);
        $gallery->photo = $photo_filename;
      }
      else{
          $photo_filename = 'no image';
      }
       $gallery->save();
       //Set Message
         \Session::flash('message','Gallery Added sucessfuly');
    return redirect()->route('galleryadd');
    }
    public function gallerylist(){
    	$gallery=Gallery::all();
    	return view('layouts.pages.gallerylist')->with('gallery',$gallery);
    }
    public function gallerydelete($id){
    	$gallerydel=Gallery::find($id);
    	$gallerydel->delete();
    	 //Set Message
         \Session::flash('message','Delete sucessfuly');
    	return redirect()->route('gallerylist');
    }
}
