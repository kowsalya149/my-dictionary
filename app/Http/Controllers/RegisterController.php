<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function getRegisterView() {
		return view('register');
	}
	
	public function validateRegister(Request $request) {
		print_r($request->all());
	}
}
