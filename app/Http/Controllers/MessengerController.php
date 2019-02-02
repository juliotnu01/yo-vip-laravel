<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MessengerController extends Controller
{
    public function receive(Request $request)
    {

    	$data = $request->all();
		
		dd($data);

    }

}
