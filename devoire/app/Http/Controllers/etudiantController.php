<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class etudiantController extends Controller
{
    public function index()
    {
        return view('ajoutEtudiant');
    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate(['n']);
    }
    
    public function index2()
    {
    
        return view('modifEtudiant');
    }
    public function index3($id){

      
        $Etudiant = Etudiant::find($id);
        return view('modifEtudiant', compact('Etudiant'));
    }
}

