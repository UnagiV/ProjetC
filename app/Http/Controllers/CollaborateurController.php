<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests\CollaborateurCreateRequest;
 use App\Http\Requests\CollaborateurUpdateRequest;

use App\Repositories\CollaborateurRepository;
//////looool
// coucou petite perruche
class CollaborateurController extends Controller
{
    protected $collaborateurRepository;

    protected $nbrPerPage = 10;

    public function __construct (CollaborateurRepository $collaborateurRepository)
    {
      $this->collaborateurRepository = $collaborateurRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $T_Collaborateurs = $this->collaborateurRepository->getPaginate($this->nbrPerPage);
        $links = $T_Collaborateurs->render();

        return view('indexColla', compact('T_Collaborateurs', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createColla');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collaborateur =$this->collaborateurRepository->store($request::all());

        return redirect('collaborateur')->withOk("Le collaborateur " . $collaborateur->Collaborateur_TCa . " a été crée.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_TCa)
    {
        $collaborateur = $this->collaborateurRepository->getById($Id_TCa);

        return view('showColla', compact('collaborateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_TCa)
    {
        $collaborateur = $this->collaborateurRepository->getById($Id_TCa);

        return view('editColla', compact('collaborateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_TCa)
    {
        $this->collaborateurRepository->update($Id_TCa, $request::all());

        return redirect('collaborateur')->withOk("le collaborateur a été modifié.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_TCa)
    {
        $this->collaborateurRepository->destroy($Id_TCa);

        return redirect()->back();
    }
}
