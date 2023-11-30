<?php
namespace App\Http\Controllers;

use App\Models\WartaParoki;
use App\Models\Informasi;

class FOController extends Controller
{
    public function show()
    {
        $wartaParoki = WartaParoki::all();
        $infoPentingCollection = Informasi::all();

        return view('home', compact('wartaParoki', 'infoPentingCollection'));
    }

    public function showdetails($id)
    {
        $wartaParoki = WartaParoki::find($id);

        if ($wartaParoki === null){
            return abort(404);
        }

        return view('warta-paroki.show', compact('wartaParoki'));
    }
}