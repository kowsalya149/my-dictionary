<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index() {
		Log::info('Index Page');
		echo 'index';
	}
	
	public function login() {
		return view('login');
	}
}
