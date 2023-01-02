<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    

    public function index()
    {
        return view('login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message','Signed in');
        }
        return redirect('login')->with('message', 'Account/Password incorrect.');
    }

    public function registration()
    {
        return view('register');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $user = $this->create($data);
       
        return  view('success',['user'=>$user]);

    }

    public function create(array $data)
    {
      return Users::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){

            $user = Auth::user();

            return view('dashboard',['userProfile' => $user]);
        }
  
    }
    
    public function signOut(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        Session::flush();
        return Redirect('login');
    }
}
