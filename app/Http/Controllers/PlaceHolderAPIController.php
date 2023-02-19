<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceHolderAPIController extends Controller
{
    public function index(){
        //return 'http client';

        //$response = Http::post('https://api.mews-demo.com/api/connector/v1/reservations/getAll');
        $response = Http::post('https://api.mews-demo.com/api/connector/v1/configuration/get',[
            'ClientToken'=> "E0D439EE522F44368DC78E1BFB03710C-D24FB11DBE31D4621C4817E028D9E1D",
            'AccessToken'=> "7059D2C25BF64EA681ACAB3A00B859CC-D91BFF2B1E3047A3E0DEC1D57BE1382",
            'Client'=> "NameOfYourCompanyOrApplication"
        ]);
        //dd($response->json());

        
        /*$response = Http::post('https://app.mews-demo.com/api/connector/v1/reservations/getAll',[
            'email' => 'connector-api@mews.li',
            'Password' => 'connector-API-2021',
            'ClientToken' => 'E0D439EE522F44368DC78E1BFB03710C-D24FB11DBE31D4621C4817E028D9E1D',
            'AcessToken' => 'C66EF7B239D24632943D115EDE9CB810-EA00F8FD8294692C940F6B5A8F9453D',
            'Client' => 'Sample Client 1.0.0'

        ]);
        dd($response);*/
        return view('PlaceholderAPI.index',[
            'data' => $response ->json()
        ]);
        //dd($response);
    }
}
