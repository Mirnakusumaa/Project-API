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
        // dd($results);
        
    }

    public function getKota($prov)
    {
    	$apiKey = '472750206e7ccd1a15590beaf7bb7f45';
	    $url = 'https://api.rajaongkir.com/starter/city';
	    $response = $this->client->get($url , [
	    	'query'=>[
	    		'key'=> $apiKey,
	    		'province'=>$prov,
	    	]
	    ]);
	    $kota = $response->getBody();
	    $kota = json_decode($kota)->rajaongkir->results;
	    $option ='';
		foreach($kota as $value){
			$option.='<option value="'.$value->city_id.'">'.$value->city_name.'</option>';
		}
	    return response()->json($option); //ini yang bener
	    // return response()->json($kota->city_name);
        // return view('masterdata.pesan', compact('kota'));
        // dd($kota);
        
    }

    public function getOngkir(Request $request)
    {
    	$apiKey = '472750206e7ccd1a15590beaf7bb7f45';
	    $url = 'https://api.rajaongkir.com/starter/cost';
	    $tujuan = $request->tujuan;
	    $berat = $request->berat;

	    $content = array(
	    	'form_params' => [
		    		'key'=> $apiKey,
		    		'origin'=> "501",
		    		'destination' => $tujuan,
		    		'weight' => $berat,
		    		'courier' => "jne",
		    ]
	    );
	    
	    $response = $this->client->post($url , $content);
	    $cek = $response->getBody();
	    $cek = json_decode($cek)->rajaongkir->results[0]->costs;
	    // dd($cek);
	    $cek = collect($cek)->where('service', 'REG')->first();
	    $harga = $cek->cost[0]->value;
	    return $harga;
	    // return response()->json($harga);

        
    }
    
}
