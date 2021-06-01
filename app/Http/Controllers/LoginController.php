<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store()
    {
    	//validate the form
    	request()->validate([
    		//rules
    		'username' => 'required',
    		'password' => 'required'
    	]);
    	//attempt to login
    	if(!Auth::attempt(['username' => request()->username, 'password' => request()->password])){
    		//if not, redirect back with an error message
    		return redirect('/')->withErrors(['Invalid credentials']);
    	}
    	return redirect('/equipment');
    	//if successful, then redirect to the dashboard
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
