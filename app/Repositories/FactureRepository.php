<?php

namespace App\Repositories;

use App\Facture;

/**
 *
 */
class FactureRepository
{
  protected $facture;

  public function __construct(Facture $facture)
  {
    $this->facture = $facture;
  }

  private function save(Facture $facture, Array $inputs)
  {
    $facture->Ste_TCl = $inputs['Ste_TCl'];
    $facture->NClient = $inputs['NClient'];
    $facture->Contact_TCo = $inputs['Contact_TCo'];
    $facture->Responsable_TCa = $inputs['Responsable_TCa'];
    $facture->NFacture_TFCl = $inputs['NFacture_TFCl'];
    $facture->NDevis_TDv = $inputs['NDevis_TDv'];
    $facture->NCommande_TDv = $inputs['NCommande_TDv'];
    $facture->Devis_Pct_TCl = $inputs['Devis_Pct_TCl'];
    $facture->Devis_Type_TCl = $inputs['Devis_Type_TCl'];
    $facture->Mdr_TCl = $inputs['Mdr_TCl'];
    $facture->Adr_Fact_TCl = $inputs['Adr_Fact_TCl'];
    $facture->PctTVA_TFCl = $inputs['PctTVA_TFCl'];
    $facture->Acpte_TFCl = $inputs['Acpte_TFCl'];
    $facture->Date_TFCl = $inputs['Date_TFCl'];
    $facture->Ech_TFCl = $inputs['Ech_TFCl'];
    $facture->Send_TFCl = $inputs['Send_TFCl'];
    $facture->Cpt_TFCl = $inputs['Cpt_TFCl'];
    $facture->Paid_TFCl = $inputs['Paid_TFCl'];
    $facture->Avoir_TFCl = isset($inputs['Avoir_TFCl']);
    $facture->BlNote_TFCl = $inputs['BlNote_TFCl'];
    $facture->Total_MO_HT_TFCl = $inputs['Total_MO_HT_TFCl'];
    $facture->Total_Vente_HT_TFCl = $inputs['Total_Vente_HT_TFCl'];
    $facture->Total_Trajet_HT_TFCl = $inputs['Total_Trajet_HT_TFCl'];
    $facture->Total_Depl_HT_TFCl = $inputs['Total_Depl_HT_TFCl'];
    $facture->Total_HT_TFCl = $inputs['Total_HT_TFCl'];
    $facture->Total_TVA_TFCl = $inputs['Total_TVA_TFCl'];
    $facture->Total_TTC_TFCl = $inputs['Total_TTC_TFCl'];

    $facture->save();
  }

  public function getPaginate($n)
  {
    return $this->facture->paginate($n);
  }

  public function store(Array $inputs)
  {
    $facture = new $this->facture;

    $this->save($facture, $inputs);

    return $facture;
  }

  public function getById($Id_TFCl)
  {
    return $this->facture->findOrFail($Id_TFCl);
  }

  public function update($Id_TFCl, Array $inputs)
  {
    $this->save($this->getById($Id_TFCl), $inputs);
  }

  public function destroy($Id_TFCl)
  {
    $this->getById($Id_TFCl)->delete();
  }




}
