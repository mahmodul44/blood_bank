<?php

namespace App\Http\Controllers;
use App\Model\Bedonar;
use App\Model\Blood;
use App\Model\District;
use App\Model\BloodGroup;
use App\Model\Gallery;
use Illuminate\Http\Request;
use App\User;
use DB;
class FrontController extends Controller
{
    public function index(){
        return view('Front.layouts.master');
    }
    public function about(){
        return view('Front.pages.about');
    }
    public function whyblood_donar(){
        return view('Front.pages.whyblood_donar');
    }
    public function bedonar(){
        $data['bloodlist']=BloodGroup::all();
        $data['districtlist']=District::all();
        return view('Front.pages.bedonar',$data);
    }
    public function search_donar(){
        $data['donarlist']=Blood::all();
        $data['districtlist']=District::all();
        $data['bloodlist']=BloodGroup::all();
        return view('Front.pages.search_donar',$data);
    }
    public function front_gallery(){

        $gallery=Gallery::all();
        return view('Front.pages.gallery')->with('gallery',$gallery);
    }
    public function contact(){
        return view('Front.pages.contact');
    }
    public function view_donar(){
        $search_text= $_GET['query'];
        $search_location=$_GET['location'];

        $search_view=Bedonar::where('bloodgroup',$search_text )->where('address',$search_location )->get();
        return view('Front.pages.view_donar')->with('search_view',$search_view);


    }
    public function userlist(){
     $users=User::all();

     return view('layouts.pages.userlist')->with('users',$users);
    }
    public function donarList(){

        $data['donarlist']=DB::table('bedonars')
            ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
            ->join('district','district.dist_id','=','bedonars.address')
            ->select('bedonars.*','blood_groups.*','district.*')
            ->get();
        return view('Front.pages.donarlist',$data);
    }
public function Blooddetails(Request $request){
    $blood_id = $request->input('blood_id');

    $dist_id = $request->input('dist_id');

    $bloodDetails = DB::table('bedonars')
        ->join('blood_groups','blood_groups.blood_id','=','bedonars.bloodgroup')
        ->join('district','district.dist_id','=','bedonars.address')
        ->select('bedonars.*','blood_groups.*','district.*')
        ->where('bloodgroup',$blood_id)
        ->where('address',$dist_id)
        ->get();
   // dd($bloodDetails);
    return $bloodDetails;

}

}
