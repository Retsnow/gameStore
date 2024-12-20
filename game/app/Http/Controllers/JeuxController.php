<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\Jeu;
use App\Models\Genre;
use App\Http\Requests\JeuRequest;

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
        return View('jeux.edit', compact('jeu'));
    }

    /**
     * Update the specified resource in storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(JeuRequest $request, Jeu $jeu)
    {
        try{

            $jeu->nom = $request->nom;
            $jeu->genres_id = $request->genres_id;
            $jeu->date_sortie = $request->date_sortie;
            $jeu->nb_download = $request->nb_download;
            $jeu->image = $request->image;
            $jeu->image_gameplay1 = $request->image_gameplay1;
            $jeu->image_gameplay2 = $request->image_gameplay2;
            $jeu->image_gameplay3 = $request->image_gameplay3;
            $jeu->video = $request->video;
            $jeu->lien = $request->lien;


            $jeu->save();
            return redirect()->route('jeux.index')->with('message', "Modification de " . $jeu->nom . " réussie!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('jeux.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $jeu = Jeu::findOrFail($id);

            $jeu->delete();
            return redirect()->route('jeux.index')->with('message', "Suppression de " . $jeu->nom . " réussie!");

        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['la suppression n\'a pas fonctionné']);
        }
        return redirect()->route('jeux.index');

    }
}
