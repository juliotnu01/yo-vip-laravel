<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MessengerController extends Controller
{
    public function index(Request $request)
    {

    	$data = $request->all();
		
		dd($data);

    }

}
