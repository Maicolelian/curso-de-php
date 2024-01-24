<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = HTTP::get('https://mindicador.cl/api');
        $dolar = $response->json();

        $response2 = HTTP::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $response2->json();
        
        return view('home', compact('dolar', 'posts'));
    }
}
