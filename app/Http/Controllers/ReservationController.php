<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function test(){

     $response = Http::post('https://api.mews-demo.com/api/connector/v1/reservations/getAll',[
        'email' => 'connector-api@mews.li',
        'Password' => 'connector-API-2021',
        "StartUtc"=> "2023-08-01T00:00:00Z",
        "EndUtc"=> "2023-10-07T00:00:00Z",
        
        "ClientToken"=> "E0D439EE522F44368DC78E1BFB03710C-D24FB11DBE31D4621C4817E028D9E1D",
        "AccessToken"=> "7059D2C25BF64EA681ACAB3A00B859CC-D91BFF2B1E3047A3E0DEC1D57BE1382",
        "Client"=> "NameOfYourCompanyOrApplication"
        

    ])->json();
    dd($response);

    $reservation = new Reservation($response['Reservations']);
    $reservation->save();
    }

    public function index()
    {
        return 'R"eservations';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return 'R"eservations';
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation): RedirectResponse
    {
        //
    }
}
