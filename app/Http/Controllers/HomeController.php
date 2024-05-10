<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function profile($id){
        $user = User::find($id);
        return view('profile', compact('user'));
    }

    public function profile_save($id, Request $request){
        $user = User::find($id);

        // if ($user->password != Hash::make($request->password)){
        if (!password_verify($request->password, $user->password)) {    
            return redirect('/profile/'. auth()->user()->id)->with('error', 'Please enter the correct password!');
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->address = $request->address;

        if($request->dob){
            $user->dob = $request->dob;
        }

        if($request->new_password && $request->new_password == $request->password_confirmation){
            $user->password = Hash::make($request->new_password);
        }
        
        $user->save();
        return redirect('/profile/'. auth()->user()->id)->with('success', 'Profile Updated Successfully');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
    
}
