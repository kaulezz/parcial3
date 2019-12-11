<?php

namespace App\Http\Controllers;
use App\score;
use Illuminate\Http\Request;

class scoreController extends Controller
{
    public function score(){
    {
        $scores = score::all();
        return view('listProfessionals', compact('scores'));
    }
}
}