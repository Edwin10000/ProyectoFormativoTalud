<?php

namespace App\Http\Controllers;

use App\Models\EntMateriale;
use Illuminate\Http\Request;

/**
 * Class EntMaterialeController
 * @package App\Http\Controllers
 */
class EntMaterialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entmateriales = EntMateriale::paginate();

        return view('entradamaterial.index', compact('entmateriales'))
            ->with('i', (request()->input('page', 1) - 1) * $entmateriales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entmateriales = new EntMateriale();
        return view('entradamaterial.create', compact('entmateriales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EntMateriale::$rules);

        $entmateriales = EntMateriale::create($request->all());

        return redirect()->route('entradamaterial.index')
            ->with('success', 'Materiale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entmateriales = EntMateriale::find($id);

        return view('entradamaterial.show', compact('entmateriales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entmateriales = EntMateriale::find($id);

        return view('entradamaterial.edit', compact('entmateriales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EntMateriale $entmateriales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntMateriale $entmateriales)
    {
        request()->validate(EntMateriale::$rules);

        $entmateriales->update($request->all());

        return redirect()->route('entradamaterial.index')
            ->with('success', 'Materiale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entmateriales = EntMateriale::find($id)->delete();

        return redirect()->route('entradamaterial.index')
            ->with('success', 'Materiale deleted successfully');
    }
}
