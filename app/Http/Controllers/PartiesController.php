<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;

class PartiesController extends Controller

{
    //Récupération de la liste des matchs
    public function listMatchs(){
        
        $parties = Parties::all();
        return view('match', [
        'parties' => $parties
        ]);
       }
    //Retourne la vue liée à un match spécifique
       public function show($parties){
        $parties = Parties::find($parties);
        return view('match.show', compact('parties'));
    }
        
    
}

