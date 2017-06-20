<?php

namespace App\Http\Controllers;

use Request;
use Carbon\Carbon;

use App\Http\Requests\BonInterventionCreateRequest;
use App\Http\Requests\BonInterventionUpdateRequest;
use App\Repositories\BonInterventionRepository;
use Illuminate\Support\Facades\DB;

class BonInterventionController extends Controller
{

    protected $bonInterventionRepository;

    protected $nbrPerPage = 10;

    public function __construct (BonInterventionRepository $bonInterventionRepository)
    {
      $this->bonInterventionRepository = $bonInterventionRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $T_Taches = $this->bonInterventionRepository->getPaginate($this->nbrPerPage);
      $links = $T_Taches->render();



      return view('indexBI', compact('T_Taches', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBI');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $bonIntervention =$this->bonInterventionRepository->store($request::all());

      return redirect('bonintervention')->withOk("Le bon d'intervention " . $bonIntervention->Id_TTa . " a été crée.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_TTa)
    {
      $bonIntervention = $this->bonInterventionRepository->getById($Id_TTa);

      return view('showBI', compact('bonIntervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_TTa)
    {
      $bonIntervention = $this->bonInterventionRepository->getById($Id_TTa);
      $responsables = DB::table('t_collaborateurs')->where('Acces_TCa', '9999')->get();
      $collaborateurs = DB::table('t_collaborateurs')->pluck('Collaborateur_TCa');
      $bonIntervention->Total_TVA_TTa = round($bonIntervention->Total_TVA_TTa, 4);
      return view('editBI', compact('bonIntervention', 'responsables', 'collaborateurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_TTa)
    {
      $this->bonInterventionRepository->update($Id_TTa, $request::all());

      return redirect('bonintervention')->withOk("le bon d'intervention a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_TTa)
    {
        $bonIntervention = $this->bonInterventionRepository->getById($Id_TTa);
    }
}
