<?php

namespace App\Http\Controllers;

use App\Models\Questionarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function usuarios()
    {
        $AllUser = User::all();
        return view('usuarios', ['AllUser'=>$AllUser]);
    }

    public function ficha()
    {
        return view('ficha');
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
    public function show($id)
    {
        $questionario = Questionarios::findOrFail($id);
        return view('ficha', compact('questionario'));
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
