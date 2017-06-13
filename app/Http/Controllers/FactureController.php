<?php

namespace App\Http\Controllers;

use Request;

use App\Repositories\FactureRepository;

class FactureController extends Controller
{
    protected$factureRepository;

    protected $nbrPerPage = 5;

    public function __construct(FactureRepository $factureRepository)
    {
      $this->factureRepository = $factureRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $T_Factures = $this->factureRepository->getPaginate($this->nbrPerPage);
        $links = $T_Factures->render();

        return view ('indexFacture', compact('T_Factures', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createFacture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facture = $this->factureRepository->store($request::all());

        return redirect('facture')->withOk("la facture "
         . $facture->NFacture_TFCl . "pour "
         . $facture->Ste_TCl . " a été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Id_TFCl
     * @return \Illuminate\Http\Response
     */
    public function show($Id_TFCl)
    {
        $facture = $this->factureRepository->getById($Id_TFCl);

        return view ('showFacture', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Id_TFCl
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_TFCl)
    {
      $facture = $this->factureRepository->getById($Id_TFCl);

      return view ('editFacture', compact('facture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Id_TFCl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_TFCl)
    {
        $this->factureRepository->update($Id_TFCl, $request::all());

        return redirect('facture')->withOk("la facture a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Id_TFCl
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_TFCl)
    {
        $this->factureRepository->destroy($Id_TFCl);

        return redirect()->back();
    }
}
