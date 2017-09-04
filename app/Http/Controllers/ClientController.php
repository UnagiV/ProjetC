<?php

namespace App\Http\Controllers;

use Request;
use App\Client;
use App\Repositories\ClientRepository;
use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    protected $clientRepository;

    // indiquer le nombre d'element par page
    protected $nbrPerPage = 5;

    public function __construct(ClientRepository $clientRepository)
    {
      $this->clientRepository = $clientRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // Index  affiche tous les éléments d'une table
    public function index()
    {

        $T_Clients = $this->clientRepository->getPaginate($this->nbrPerPage);

        $links = $T_Clients->render();

        return view('indexClient', compact('T_Clients','links'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // on utilise la fonction create pour cree un element et l'injester dans un BDD
    public function create()
    {
        $reglement = DB::table('T_Mode_Reglement')->pluck('Des_Mdr');
        return view('createClient', compact('reglement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // Store nous renvoi vers la page d'accueil automatiquement apres l'envoi
     //de l'element crée
    public function store(Request $request)
    {
        $client = $this->clientRepository->store($request::all());


        return redirect('client')->withOk("la fiche du client " .
        $client->Ste_TCl . " a été crée.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Show permet de voir plus en detail les données d'un element selectionné
    public function show($Id_TCl)
    {
        $client = $this->clientRepository->getById($Id_TCl);


        return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Edit permet de faire une modification d'un element selectionné
    public function edit($Id_TCl)
    {
      $reglement = DB::table('T_Mode_Reglement')->pluck('Des_Mdr');

      $client = $this->clientRepository->getById($Id_TCl);
      // $modifContact = DB::table('t_contact')->pluck('Id_TCo');

      return view('editClient', compact('client', 'reglement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // Update nous renvoi vers la page d'accueil automatiquement apres l'envoi
     //de l'element modifié
    public function update(Request $request, $Id_TCl)
    {
        $this->clientRepository->update($Id_TCl,$request::all());

        return redirect('client')->withOk("la fiche client a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Cette fonction permet de supprimer l'element
    public function destroy($Id_TCl)
    {
        $this->clientRepository->destroy($Id_TCl);

        return redirect()->back();
    }
}
