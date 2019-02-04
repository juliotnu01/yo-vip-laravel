<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function index(Request $request)
    {




		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => '/',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
		]);

		$data = $client->request('GET', '/webhook');
		dd($data);

		

    }

}
