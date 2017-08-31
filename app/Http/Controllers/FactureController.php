<?php

namespace App\Http\Controllers;

use Request;

use App\Repositories\FactureRepository;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

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
      $entreprise = DB::table('T_Clients')->pluck('Ste_TCl');
      $responsables = DB::table('t_collaborateurs')->where('Acces_TCa', '9999')->get();
      $boninter = DB::table('T_Taches')->get();
      $dateNow = date("Y");
      $factureLast = DB::table('T_Factures')->max('Id_TFCl');
      $nouvelleFacture = $factureLast + 1;

        return view('createFacture', compact('responsables','boninter',
        'entreprise','factureLast','nouvelleFacture','dateNow') );
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
      $responsables = DB::table('t_collaborateurs')->where('Acces_TCa', '9999')->get();
      $reglement = DB::table('T_Mode_Reglement')->pluck('Des_Mdr');
      $boninter = DB::table('T_Taches')->where('NFacture_TFCl',$facture->NFacture_TFCl)->get();

      return view ('editFacture', compact('facture', 'responsables','reglement','boninter'));
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
    public function choisirClient()
    {

    }
}
