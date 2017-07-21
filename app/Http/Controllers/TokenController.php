<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {

    }

    public function token()
    {	
    	

    	if ($token = 123456) {
    		return view('token');
    	}
    	echo "token invalido";
    	
    }
}
