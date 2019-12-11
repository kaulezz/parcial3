<?php

namespace App\Http\Controllers;
use App\professional;

use Illuminate\Http\Request;

class professionalController extends Controller
{
    public function listController(){
        $professional = professional::all();
        return view('listProfessionals', compact('professional'));
    }
}
