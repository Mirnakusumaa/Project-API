<?php

namespace App\Http\Controllers;

use RajaOngkir;
use Illuminate\Http\Request;



class RajaOngkirController extends Controller
{
	public function index()
    {
    	$list_provinsi = RajaOngkir::province();
        return view('masterdata.pesan', compact('list_provinsi'));
    }

    
}
