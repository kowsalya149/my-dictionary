<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Customer;

/**
 * 
 * Registration controller.
 * 
 * @author Manoharan Jayabal
 *
 */
class RegisterController extends Controller
{
    public function getRegisterView() {
        $customer = new Customer([
            'firstname' => '',
            'lastname' => '',
            'password' => ''
        ]);
       
        return view('register',compact('customer',$customer));
	}
	
	/**
	 * Validate register inputs.
	 * 
	 * @param Request $request
	 */
	public function validateRegister(Request $request) {
	    Log::info(' validate Registeration ');
	    Log::warning('Something could be going wrong.');
	    Log::error('Something is really going wrong.');
		print_r($request->all());
	}
}
