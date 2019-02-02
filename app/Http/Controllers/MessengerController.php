<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MessengerController extends Controller
{
    public function receive()
    {


		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'https://bot-yo-vip.herokuapp.com',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
		]);
		
		$response = $client->request('GET', 'webhook');
		dd($response->getBody());

    }

}
