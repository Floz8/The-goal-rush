<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;

class PartiesController extends Controller
{
    public function listMatchs(){
        
        $parties = Parties::all();
        return view('match', [
        'parties' => $parties
        ]);
       }

       public function show($parties){
        $parties = Parties::find($parties);
        return view('match.show', compact('parties'));
    }
        
    
}

