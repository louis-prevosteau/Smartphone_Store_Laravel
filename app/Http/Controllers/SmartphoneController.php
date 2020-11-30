<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use Illuminate\Support\Facades\DB;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $min = $request->query('min', 'All');
        $max = $request->query('max', 'All');
        if ($min != 'All' || $max != 'All'){
            $smartphones = DB::table('smartphones')->whereBetween('prix',[$min, $max])->get();
        }else{
            $smartphones = Smartphone::all();
        }
        return view('smartphones.index', ['smartphones' => $smartphones, 'min' => $min, 'max' => $max]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('smartphones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'taille' => 'required',
                'type_réseau' => 'required',
                'système' => 'required',
                'connectique' => 'required',
                'autonomie' => 'required',
                'caractéristique' => 'required',
                'prix' => 'required'
            ]
        );

        $smartphone = new Smartphone;
        $smartphone->nom = $request->nom;
        $smartphone->taille = $request->taille;
        $smartphone->type_réseau = $request->type_réseau;
        $smartphone->système = $request->système;
        $smartphone->connectique = $request->connectique;
        $smartphone->autonomie = $request->autonomie;
        $smartphone->caractéristique = $request->caractéristique;
        $smartphone->prix = $request->prix;

        $smartphone->save();

        return redirect('/smartphones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $action = $request->query('action','show');
        $smartphone = Smartphone::find($id);
        return view('smartphones.show', ['smartphone' => $smartphone, 'action' => $action]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $smartphone= Smartphone::find($id);
        return view('smartphones.edit', ['smartphone' => $smartphone]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $smartphone = Smartphone::find($id);
        $this->validate(
            $request,
            [
                'nom' => 'required',
                'taille' => 'required',
                'type_réseau' => 'required',
                'système' => 'required',
                'connectique' => 'required',
                'autonomie' => 'required',
                'caractéristique' => 'required',
                'prix' => 'required'
            ]
        );

        $smartphone->nom = $request->nom;
        $smartphone->taille = $request->taille;
        $smartphone->type_réseau = $request->type_réseau;
        $smartphone->système = $request->système;
        $smartphone->connectique = $request->connectique;
        $smartphone->autonomie = $request->autonomie;
        $smartphone->caractéristique = $request->caractéristique;
        $smartphone->prix = $request->prix;

        $smartphone->save();

        return redirect('/smartphones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if ($request->delete == 'valide') {
            $smartphone = Smartphone::find($id);
            $smartphone->delete();
        }
        return redirect()->route('smartphones.index');
    }

    public function search(Request $request ){
        $search = $request->get('search');
        $smartphones = DB::table('smartphones')->where('nom','like','%'.$search.'%')->paginate(6);
        return view('smartphones.index',['smartphones' => $smartphones]);
    }
}
