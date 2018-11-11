<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;



class RajaOngkirController extends Controller
{
	function __construct() {
    $this->client = new \GuzzleHttp\Client();
    $this->apiKey=env('RAJAONGKIR_KEY', '472750206e7ccd1a15590beaf7bb7f45');
	}

	public function index()
    {
    	$apiKey = '472750206e7ccd1a15590beaf7bb7f45';
    	
	    $url = 'https://api.rajaongkir.com/starter/province';
	    $response = $this->client->get($url , ['query'=>['key'=> $apiKey]]);
	    $results = $response->getBody();
	    $results = json_decode($results);
	    // return response()->json($results);
        return view('masterdata.pesan', compact('results'));
        
    }


    
}
