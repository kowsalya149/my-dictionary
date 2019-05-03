<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Validation Controller.
 * 
 * @author Manoharan Jayabal
 *
 */
class ValidationController extends Controller
{
    public function validateLogin(Request $request) {
	  Log::info("validate login");
	  $results = DB::select('select * from test.user_tbl');
	  Log::info($results);
	  
   }
}
