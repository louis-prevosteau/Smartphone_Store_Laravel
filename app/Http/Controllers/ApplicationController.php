<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Smartphone;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all();
        return view('applications.index',['applications' => $applications]);
    }

    public function show(Request $request, $id){
        $action = $request->query('action', 'show');
        $applications = Smartphone::findOrFail($id)->applications()->get()->all();
        $smartphone = Smartphone::findOrFail($id);
        return view('applications.show',['applications' => $applications, 'smartphone' => $smartphone, 'action' => $action]);
    }
}
