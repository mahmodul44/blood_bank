<?php

namespace App\Http\Controllers;
use App\Model\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
   public function bloodinsert(Request $request){
    $blood =new Blood;
    $blood->bloodgroup=$request->bloodgroup;
    $blood->save();
    return redirect()->route('bloodadd');
   }
   public function bloodlist(Request $request){
    $blood =Blood::all();
    return redirect()->route('layouts.pages.bloodlist')->with('blood',$blood);

   }
}
