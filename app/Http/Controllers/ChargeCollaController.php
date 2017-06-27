<?php

namespace App\Http\Controllers;

use Request;
use App\Repositories\ChargeCollaRepository;
use Illuminate\Support\Facades\DB;
class ChargeCollaController extends Controller
{
    protected $chargeCollaRepository;

    protected $nbrPerPage = 10;

    public function __construct(ChargeCollaRepository $chargeCollaRepository)
    {
      $this->chargeCollaRepository = $chargeCollaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $T_Collaborateurs_Charges = $this->chargeCollaRepository->getPaginate($this->nbrPerPage);
        $links = $T_Collaborateurs_Charges->render();

        return view ('indexCharColl', compact('T_Collaborateurs_Charges','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return viex ('createCharColl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chargeColla = $this->chargeCollaRepository->store($request::all());

        return redirect('chargecolla')->withOk("La charge pour le collaborateur"
         . $chargeColla->Collaborateur_TCa . " a bien ete enregistré. ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_TCc)
    {
        $chargeColla = $this->chargeCollaRepository->getById($Id_TCc);

        return view ('showCharColl', compact('chargeColla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_TCc)
    {
      $chargeColla = $this->chargeCollaRepository->getById($Id_TCc);

      return view ('editCharColl', compact('chargeColla'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_TCc)
    {
        $this->chargeCollaRepository->update($Id_TCc, $request::all());

        return redirect ('chargecolla')->withOk("La charge a bien été modifié. ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_TCc)
    {
        $this->chargeCollaRepository->destroy($Id_TCc);

        return redirect()->back();
    }
}
