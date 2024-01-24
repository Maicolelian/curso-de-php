<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $response = Http::get('https://images-api.nasa.gov');
        $nasa = $response->json();

        dd($response->body());
 
        return view('home', ['nasa' => $nasa]);
    }
    
}
