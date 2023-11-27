<?php
namespace App\Http\Controllers;

use App\Models\WartaParoki;
use App\Models\Informasi;

class WartaParokiController extends Controller
{
    public function show()
    {
        $wartaParoki = WartaParoki::all();
        $infoPentingCollection = Informasi::all();

        return view('home', compact('wartaParoki', 'infoPentingCollection'));
    }
}