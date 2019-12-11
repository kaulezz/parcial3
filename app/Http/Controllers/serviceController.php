<?php

namespace App\Http\Controllers;
use App\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function services(){
        {
            $services = service::all();
            return view('listServices', compact('services'));
        }
    }
}
