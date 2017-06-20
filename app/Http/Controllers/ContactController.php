<?php

namespace App\Http\Controllers;

use Request;
use App\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    protected $contactRepository;

    protected $nbrPerPage = 10;

    public function __construct(ContactRepository $contactRepository)
    {
      $this->contactRepository = $contactRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $T_Contact = $this->contactRepository->getPaginate($this->nbrPerPage);

        $links = $T_Contact->render();

        return view('indexContact', compact('T_Contact','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createContact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = $this->contactRepository->store($request::all());

        return redirect('contact')->withOk("la fiche du contact " .
        $contact->Contact_TCo . "a été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Id_TCo
     * @return \Illuminate\Http\Response
     */
    public function show($Id_TCo)
    {
        $contact = $this->contactRepository->getById($Id_TCo);

        return view ('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Id_TCo
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_TCo)
    {
      $contact = $this->contactRepository->getById($Id_TCo);

      return view ('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Id_TCo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_TCo)
    {
        $this->contactRepository->update($Id_TCo,$request::all());

        return redirect('contact')->withOk("la fiche client a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Id_TCo
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_TCo)
    {
      $this->contactRepository->destroy($Id_TCo);

      return redirect()->back();  
    }
}
