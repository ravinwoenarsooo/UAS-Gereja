<?php
namespace App\Http\Controllers;

use App\Models\WartaParoki;

class WartaParokiController extends Controller
{
    public function show()
    {
        // Retrieve the latest WartaParoki instance
        $wartaParoki = WartaParoki::all();

        return view('home', compact('wartaParoki'));
    }
}