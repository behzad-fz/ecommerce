<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
	private $user;
	public function __construct(User $user){
		$this->user = $user;
	}
	
	public function NewAccount() {

		return view('users.NewAccount');
	}

	public function create(Request $request){

		try{
    $this->validate($request,User::$rules );
    
			}catch(ValidationException $e){

				return "ERROR";
			}

		$this->user->firstname = $request->input('firstname');
		$this->user->lastname = $request->input('lastname');
		$this->user->email = $request->input('email');
		$this->user->password = Hash::make($request->input('password'));
		$this->user->telephone = $request->input('telephone');
		$this->user->save();
		return redirect()->to('users/signin')->with('massage','حساب کاربری ساخته شد . لاگین کنید');
	}

	public function SignIn(){

		return view('users.SignIn');
	}

	public function signinto(Request $request){
		$credentials=$request->only('email','password');

		if(Auth::attempt($credentials)){

			return redirect()->intended('/')->with('massage','باتشکر از لاگین شما');
		}
		return redirect()->back()->with('massage','اشتباه وارد کردید');

	}

	public function logout(){
		Auth::logout();
		return redirect()->to('/')->with('massage','خارج شدید');
	}
}
