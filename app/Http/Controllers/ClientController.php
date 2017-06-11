<?php

namespace App\Http\Controllers;

use Request;
use App\Client;
use App\Repositories\ClientRepository;
use App\Repositories\ContactRepository;

class ClientController extends Controller
{
    protected $clientRepository;
    protected $contactRepository;

    protected $nbrPerPage = 15;

    public function __construct(ClientRepository $clientRepository)
    {
      $this->clientRepository = $clientRepository;
    }

    // public function __construct(ContactRepository $contactRepository)
    // {
    //   $this->contactRepository = $contactRepository;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $T_Clients = Client::with('contacts')->get();
        $T_Clients = $this->clientRepository->getPaginate($this->nbrPerPage);
        $T_Clients->load('contacts');
        $links = $T_Clients->render();

        $T_Contact = $this->contactRepository;//->getPaginate($this->nbrPerPage);
        $links = $T_Contact;

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
        // $contact = $this->contactRepository->store($request::all());

        return redirect('client')->withOk("la fiche du client " . $client->Ste_TCl . " a été crée.");

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
        // $contact = $this->contactRepository->getById($$Id_TCo);

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
      // $contact = $this->contactRepository->getById($$Id_TCo);

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

        // $this->contactRepository->update($Id_TCo,$request::all());

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

        // $this->contactRepository->destroy($Id_TCo);

        return redirect()->back();
    }
}
