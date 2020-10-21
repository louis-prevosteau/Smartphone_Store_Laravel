<?php

namespace App\Http\Controllers;

use App\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index(){
        $smartphones = Smartphone::all();
        return view('index',['smartphones' => $smartphones]);
    }
}
