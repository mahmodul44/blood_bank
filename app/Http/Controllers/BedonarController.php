<?php

namespace App\Http\Controllers;
use App\Model\BloodGroup;
use App\Model\Bedonar;
use App\Model\District;
use Illuminate\Http\Request;
use DB;
class BedonarController extends Controller
{

 public function front_bedonarinsert(Request $request){
            $blood =new Bedonar;
            $blood->fullname=$request->fullname;
            $blood->mobileno=$request->mobileno;
            $blood->emailno=$request->emailno;
            $blood->age=$request->age;
            $blood->gender=$request->gender;
            $blood->bloodgroup=$request->bloodgroup;
            $blood->dod=$request->dod;
            $blood->address=$request->address;
            $blood->message=$request->message;
            $blood->save();
             //Set Message
        \Session::flash('message','Donar Added sucessfuly');
            return redirect()->route('bedonar');
    }



    public function bedonar(Request $request){
        $donar =new Bedonar;
        $donar->fullname=$request->fullname;
        $donar->mobileno=$request->mobileno;
        $donar->emailno=$request->emailno;
        $donar->age=$request->age;
        $donar->gender=$request->gender;
        $donar->bloodgroup=$request->bloodgroup;
        $donar->dod=$request->dod;
        $donar->address=$request->address;
        $donar->message=$request->message;
        $donar->save();
        return redirect()->route('bedonar');
    }
    public function editblood_info($id){
        $data['bloodgrouplist']=BloodGroup::all();
        $data['districtlist']=District::all();
        $data['bloodlist']=Bedonar::find($id);
        return view('layouts.pages.editblood_info',$data);
    }
    public function updateblood_info(Request $request,$id){
        $donar=Bedonar::find($id);

        $donar->fullname=$request->fullname;
        $donar->mobileno=$request->mobileno;
        $donar->emailno=$request->emailno;
        $donar->age=$request->age;
        $donar->gender=$request->gender;
        $donar->bloodgroup=$request->bloodgroup;
        $donar->dod=$request->dod;
        $donar->address=$request->address;
        $donar->message=$request->message;
        $donar->update();
        // //Set Message
        // \Session::flash('message','Delete sucessfuly');
        return redirect()->route('home');
    }
    public function deleteblood_info($id){
        $bedonars=Bedonar::find($id);
        $bedonars->delete();
        return redirect()->route('Bpositive');
    }

    public function Apositive(){
     $data['Adonars']=DB::table('bedonars')
         ->join('district','district.dist_id','=','bedonars.address')
         ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
        ->where('bloodgroup', 1)
         ->get();
        return view('layouts.pages.Apositive',$data);
    }
    public function Anegative(){
        $data['Anegative_donars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 2)
            ->get();
        return view('layouts.pages.Anegative',$data);
    }
    public function Bpositive(){
        $data['Bpositive_donars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 3)
            ->get();
        return view('layouts.pages.Bpositive',$data);
    }
    public function Bnegative(){
        $data['Bnegative_donars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 4)
            ->get();
        return view('layouts.pages.Bnegative',$data);
    }
    public function ABpositive(){
        $data['ABdonars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 5)
            ->get();
        return view('layouts.pages.ABpositive',$data);
    }
    public function ABnegative(){
        $data['ABnegative_donars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 6)
            ->get();
        return view('layouts.pages.ABnegative',$data);
    }
    public function Opositive(){
        $data['Odonars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 7)
            ->get();
        return view('layouts.pages.Opositive',$data);
    }
    public function Onegative(){
        $data['Onegative_donars']=DB::table('bedonars')
            ->join('district','district.dist_id','=','bedonars.address')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->where('bloodgroup', 8)
            ->get();
        return view('layouts.pages.Onegative',$data);
    }


}
