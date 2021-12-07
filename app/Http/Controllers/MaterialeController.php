<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use Illuminate\Http\Request;

/**
 * Class MaterialeController
 * @package App\Http\Controllers
 */
class MaterialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Materiale::all();
        return view('/materiale/index',compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Materiale = new Materiale();
        return view('/materiales/create',compact('Materiale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Materiale = $request->all();
        Materiale::create($Materiale);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materiale = Materiale::find($id);

        return view('materiale.show', compact('materiale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/materiales/edit',compact('Materiale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materiale $materiale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiale $Materiale)
    {
        $materiales = $request->all();
        $Materiale->update($materiales);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materiale = Materiale::find($id)->delete();

        return redirect()->route('materiales.index')
            ->with('success', 'Materiale deleted successfully');
    }
}
