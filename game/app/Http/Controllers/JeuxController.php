<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\Jeu;
use App\Models\Genre;

class JeuxController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        $jeux  = Jeu::with('genre')->get();
        return View('jeux.index', compact('jeux'));
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function browse() : View
    {
        $jeux  = Jeu::with('genre')->get();
        return View('jeux.jeux', compact('jeux'));
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View('jeux.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $jeu = new Jeu($request->all());
            $jeu->save();
        }

        catch (\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('jeux.browse');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jeu $jeu)
    {
        return View('jeux.show', compact('jeu'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeu $jeu)
    {
        return View('jeux.modifier', compact('jeu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
