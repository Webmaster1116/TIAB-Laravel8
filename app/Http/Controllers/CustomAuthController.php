<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  
      

    public function customLogin(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('login')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
        else{
            $validator['message'] = 'Login details are not valid';
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
    }



    public function registration()
    {
        return view('registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/login")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}