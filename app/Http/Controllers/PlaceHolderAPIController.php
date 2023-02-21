<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use App\Models\Reservation;

class PlaceHolderAPIController extends Controller
{
    public function index(){
        //return 'http client';

        //$response = Http::post('https://api.mews-demo.com/api/connector/v1/Reservations/getAll');
        /*$response = Http::post('https://api.mews-demo.com/api/connector/v1/configuration/get',[
            'ClientToken'=> "E0D439EE522F44368DC78E1BFB03710C-D24FB11DBE31D4621C4817E028D9E1D",
            'AccessToken'=> "7059D2C25BF64EA681ACAB3A00B859CC-D91BFF2B1E3047A3E0DEC1D57BE1382",
            'Client'=> "NameOfYourCompanyOrApplication"
        ]);*/
        //dd($response);

        /*
        $response = Http::accept('application/json')->timeout(5)->post('https://api.mews-demo.com/api/connector/v1/reservations/getAll',[
            
            'email' => 'connector-api@mews.li',
            'Password' => 'connector-API-2021',
            'ClientToken' => '2CC71B0660F345019882AD200155B4FE-4A1FC9080A4DD2A404734003674F77E',
            'AcessToken' => '5F56B9903A834F199E28AD20015E58CA-5C6A1A00550634911534AD6A098E8B7',
            'Client' => 'Sample Client 1.0.0',
            'Limitation'=> [
                
                "Count"=> 10]
            
            
            
        ]);
        $response -> throw();
        //d($response->collect());
        dd($response);
*/
        
        $response = Http::post('https://api.mews-demo.com/api/connector/v1/reservations/getAll',[
            'email' => 'connector-api@mews.li',
            'Password' => 'connector-API-2021',
            "StartUtc"=> "2023-08-01T00:00:00Z",
            "EndUtc"=> "2023-10-07T00:00:00Z",
            
            "ClientToken"=> "E0D439EE522F44368DC78E1BFB03710C-D24FB11DBE31D4621C4817E028D9E1D",
            "AccessToken"=> "7059D2C25BF64EA681ACAB3A00B859CC-D91BFF2B1E3047A3E0DEC1D57BE1382",
            "Client"=> "NameOfYourCompanyOrApplication"
            

        ])->json();
        //dd($response->json());

        $reservation = new Reservation($response['Reservations']);
        //save($reservation);
        /*return view('PlaceholderAPI.index',[
            'data' => $response ->json()
        ]);*/
        //dd($response);
    }
}
