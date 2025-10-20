<?php

namespace App\Http\Controllers;

use App\Models\Questionarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Allquestionarios = Questionarios::all();

        return view('dashboard', ['Allquestionarios' => $Allquestionarios]);
    }

    public function questionario()
    {
        return view('questionario');
    }

    public function ficha()
    {
        return view('ficha');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Questionarios::create($request->all());
        return redirect()->route('dashboard.questionario')->with('seccess', 'Questionario enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Questionarios $id)
    {
        $questionario = Questionarios::find($id);
        return view('ficha', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questionarios $questionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questionarios $questionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questionarios $questionario)
    {
        //
    }
}
