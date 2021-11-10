<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Model\District;
class DistrictController extends Controller
{
    public function districtadd(){
        return view('layouts.pages.districtadd');
    }

    public function districtinsert(Request $request){
        $district=new District;
        $district->district_name=$request->district_name;
        $district->save();
        //Set Message
        \Session::flash('message','District Added sucessfuly');
        return redirect()->route('districtadd');
    }
    public function districtlist(){
        $data['districtlist']=District::all();
        return view('layouts.pages.districtlist',$data);
    }
    public function districtdelete($dist_id){
        $districtdel=District::find($dist_id);
        $districtdel->delete();
        //Set Message
        \Session::flash('message','Delete sucessfuly');
        return redirect()->route('districtlist');
    }
}
