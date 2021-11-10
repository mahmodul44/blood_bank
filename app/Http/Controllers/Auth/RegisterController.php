<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['required'],
            'gender' =>['required'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      
        $request = request();

        $image = $request->file('image');
      
        $profileImageSaveAsName = time() . Auth::id() . "-profile." . $image->getClientOriginalExtension();
   
        $upload_path = 'admin/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $image->move($upload_path, $profileImageSaveAsName);
       

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' =>$data['phone'],
            'gender' =>$data['gender'],
            'image' => $profile_image_url,
           
        ]);

        

        
    }

    public function profile_update(){
        
        $request = request();

        $image = $request->file('image');
      
        $profileImageSaveAsName = time() . Auth::id() . "-profile." . $image->getClientOriginalExtension();
   
        $upload_path = 'admin/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $image->move($upload_path, $profileImageSaveAsName);
        return User::profile_update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' =>$data['phone'],
            'gender' =>$data['gender'],
            'image' => $profile_image_url,
           
        ]);

    }
}
