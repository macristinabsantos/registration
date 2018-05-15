<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Hash;

class RegistersController extends Controller
{
    public function register(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'dob' => 'required',
    		'gender' => 'required',
    		'country' => 'required',
    		'mobile' => 'required',
    		'address' => 'required',
    	]);

    	$candidates = new Candidate;
    	$candidates->name = $name;
    	$candidates->email = $email;
    	$candidates->password = Hash::make($password);
    	$candidates->dob = $request->input('dob');
    	$candidates->gender = $request->input('gender');
    	$candidates->country = $request->input('country');
    	$candidates->mobile = $request->input('mobile');
    	$candidates->address = $request->input('address');
    	$candidates->save();

        /**
         * Hash the password to make it secure
         * 1 -  add "use hash;"
         * 2 - add the variable in the make function of hash class
         * e.g.:
         *  $password = Hash::make($variable); / $password = Hash::make('password'); 
         *  Note: the data column must have a 256 string storage capacity...
         */

    	return redirect('/')->with('response', 'Register Successfully');
    }
    
}
