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


    protected $nbrPerPage = 10;

    public function __construct(ClientRepository $clientRepository)
    {
      $this->clientRepository = $clientRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function create()
    {
        return view('createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function edit($Id_TCl)
    {
      $client = $this->clientRepository->getById($Id_TCl);


      return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($Id_TCl)
    {
        $this->clientRepository->destroy($Id_TCl);

        return redirect()->back();
    }
}
