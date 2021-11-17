<?php

namespace App\Http\Controllers;

use App\Models\ArtesMarciale;
use Illuminate\Http\Request;

/**
 * Class ArtesMarcialeController
 * @package App\Http\Controllers
 */
class ArtesMarcialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artesMarciales = ArtesMarciale::paginate();

        return view('artes-marciale.index', compact('artesMarciales'))
            ->with('i', (request()->input('page', 1) - 1) * $artesMarciales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artesMarciale = new ArtesMarciale();
        return view('artes-marciale.create', compact('artesMarciale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ArtesMarciale::$rules);

        $artesMarciale = ArtesMarciale::create($request->all());

        return redirect()->route('artes-marciales.index')
            ->with('success', 'ArtesMarciale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artesMarciale = ArtesMarciale::find($id);

        return view('artes-marciale.show', compact('artesMarciale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artesMarciale = ArtesMarciale::find($id);

        return view('artes-marciale.edit', compact('artesMarciale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ArtesMarciale $artesMarciale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtesMarciale $artesMarciale)
    {
        request()->validate(ArtesMarciale::$rules);

        $artesMarciale->update($request->all());

        return redirect()->route('artes-marciales.index')
            ->with('success', 'ArtesMarciale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $artesMarciale = ArtesMarciale::find($id)->delete();

        return redirect()->route('artes-marciales.index')
            ->with('success', 'ArtesMarciale deleted successfully');
    }
}
