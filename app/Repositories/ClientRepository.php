<?php

namespace App\Repositories;

use App\Client;

/**
 *
 */
class ClientRepository
{
  protected $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  private function save(Client $client, Array $inputs)
  {
    $client->An_TCl = $inputs['An_TCl'];
    $client->Ste_TCl = $inputs['Ste_TCl'];
    $client->Adr_Fact_TCl = $inputs['Adr_Fact_TCl'];
    $client->Contact_TCl = $inputs['Contact_TCl'];
    $client->Tel_TCl = $inputs['Tel_TCl'];
    $client->Fax_TCl = $inputs['Fax_TCl'];
    $client->EMail_TCl = $inputs['EMail_TCl'];
    $client->Web_TCl = $inputs['Web_TCl'];
    $client->Mdr_TCl = $inputs['Mdr_TCl'];
    $client->Information_TCl = $inputs['Information_TCl'];
    $client->Siret_TCl = $inputs['Siret_TCl'];
    $client->Siren_TCl = $inputs['Siren_TCl'];
    $client->TPE_TCl = isset($inputs['TPE_TCl']);
    $client->PME_PMI_TCl = isset($inputs['PME_PMI_TCl']);
    $client->ETI_TCl = isset($inputs['ETI_TCl']);
    $client->Grands_Comptes_TCl = isset($inputs['Grands_Comptes_TCl']);
    $client->Particulier_TCl = isset($inputs['Particulier_TCl']);
    $client->Collec_TCl = isset($inputs['Collec_TCl']);
    $client->Tarif_Elec = $inputs['Tarif_Elec'];
    $client->Tarif_Tech = $inputs['Tarif_Tech'];
    $client->Tarif_Autom = $inputs['Tarif_Autom'];
    $client->Tarif_Etude = $inputs['Tarif_Etude'];


    $client->save();
  }

  public function getPaginate($n)
  {
    return $this->client->paginate($n);
  }

  public function store(Array $inputs)
  {
    $client = new $this->client;

    $this->save($client, $inputs);

    return $client;
  }

  public function getById($Id_TCl)
  {
    return $this->client->findOrFail($Id_TCl);
  }

  public function update($Id_TCl, Array $inputs)
  {
    $this->save($this->getById($Id_TCl), $inputs);
  }

  public function destroy($Id_TCl)
  {
    $this->getById($Id_TCl)->delete();
  }

}
