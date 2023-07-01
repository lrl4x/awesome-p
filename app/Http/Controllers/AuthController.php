<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginPost(Request $request)
    {
         $request->validate([
        'Username'=>['required'],
        'Password'=>['required']
    ]);
    $userinfo =User::where('Username','=',$request->Username)->first(); 

    if(!$userinfo){
    return redirect(route('login'))
    ->with('error','user not found');
    }else{
        if(Hash::check($request->Password,$userinfo->Password)){
          Auth::login($userinfo);
            $request->session()->put('loggedUser',$userinfo->id);
            return redirect(route('home.index'));
        }else{
            return back()
            ->with('error','incorrect password');
        }
    }
    }

    

    // $user =User::where('Username',$request->Username)->first();
    // if($user){
    //     Auth::login($user);
    //     if(Auth::check()){
    //         return redirect(route('home.index'));
    //     }else{
    //        return redirect(route('login'));
    //     }
    //  } else{
    //     return redirect(route('login'));
    //     }
    // }

        // $request->validate([
        //     'Username'=>['required'],
        //     'password'=>['required']
        // ]);
        // $user =User::where('Username','=',$request->Username)->first();
    
        // if($user && $request->password == $user->password){
        //     Auth::login($user);
        //     if(Auth::check()){
        //         return "Login in";
        //     }else{
        //         return "is not logged in";
        //     }
        // }else{
        //     return "error";
        // }
        
    //    $credentials= $request->validate([
    //     'Username' => ['required'],
    //     'password' => ['required']
    //    ]);

    //    if(Auth::attempt($credentials)){
    //     return redirect((route('index.car')));
    //     } 
    //      return redirect()->back()
    //      ->with('error','The provided credentials do not match our records.');
  
    
    

    public function register()
    {
        return view('register');
    }


    public function registerPost(Request $request)
    {
        $request->validate([
            'Username' => 'required',
            'Email' => 'required|unique:users|email',
            'Password' => 'required'
        ]);
        $data['Username'] = $request->Username;
        $data['Email'] = $request->Email;
        $data['Password'] =Hash::make($request->Password);

        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))
            ->with("error", "Registeration failed,try again");
        }
        return redirect(route('login'))
        ->with('success','new user has been created successfully');

    }


    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }


}