<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ModeReglementRepository;

class ModeReglementController extends Controller
{
    protected $modeReglementRepository;

    protected $nbrPerPage = 20;

    public function __construct(ModeReglementRepository $modeReglementRepository)
    {
      $this->modeReglementRepository = $modeReglementRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $T_Mode_Reglement = $this->modeReglementRepository->getPaginate($this->nbrPerPage);
        $links = $T_Mode_Reglement->render();

        return view('indexMDR', compact('T_Mode_Reglement','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMDR');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modeReglement = $this->modeReglementRepository->store($request::all());

        return redirect('modeReglement')->withOk("le nouveau Mode de Réglement" . $modeReglementRepository->Id_Mdr . "a été enregistré. ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Mdr)
    {
        $modeReglement = $this->modeReglementRepository->getById($Id_Mdr);

        return view('showMDR', compact('modeReglement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Mdr)
    {
      $modeReglement = $this->modeReglementRepository->getById($Id_Mdr);

      return view('editMDR', compact('modeReglement'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Mdr)
    {
        $this->modeReglementRepository->update($Id_Mdr, $request::all());

        return redirect('modeReglement')->withOk(" le mode de reglement a été modifié. ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Mdr)
    {
        $modeReglement = $this->modeReglementRepository->getById($Id_Mdr);

        return redirect()->back();
    }
}
