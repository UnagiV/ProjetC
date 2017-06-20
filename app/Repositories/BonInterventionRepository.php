<?php

namespace App\Repositories;

use App\BonIntervention;

class BonInterventionRepository
{
      protected $bonIntervention;

      public function __construct(BonIntervention $bonIntervention)
    {
      $this->bonIntervention = $bonIntervention;
    }

    private function save(BonIntervention $bonIntervention, Array $inputs)
    {
      $bonIntervention->Id_TTa = $inputs['Id_TTa'];
      $bonIntervention->Responsable_TCa = $inputs['Responsable_TCa'];
      $bonIntervention->Date_TTa = $inputs['Date_TTa'];
      $bonIntervention->Ste_TCl = $inputs['Ste_TCl'];
      $bonIntervention->Ste_Utl = $inputs['Ste_Utl'];
      $bonIntervention->Adr_Liv_TCl = $inputs['Adr_Liv_TCl'];
      $bonIntervention->Contact_TCo = $inputs['Contact_TCo'];
      $bonIntervention->Collaborateur_TCa = $inputs['Collaborateur_TCa'];
      $bonIntervention->NDevis_TDv = $inputs['NDevis_TDv'];
      $bonIntervention->Devis_Type_TTa = $inputs['Devis_Type_TTa'];
      $bonIntervention->NCommande_TDv = $inputs['NCommande_TDv'];
      $bonIntervention->Date_Debut_TTa = $inputs['Date_Debut_TTa'];
      $bonIntervention->Date_Fin_TTa = $inputs['Date_Fin_TTa'];
      $bonIntervention->Date_Demande_TTa = $inputs['Date_Demande_TTa'];
      $bonIntervention->Responsable_TCl = $inputs['Responsable_TCl'];
      $bonIntervention->Machine_TTa = $inputs['Machine_TTa'];
      $bonIntervention->Garantie_TTa = isset($inputs['Garantie_TTa']);
      $bonIntervention->Facturation_TTa = isset($inputs['Facturation_TTa']);
      $bonIntervention->Travaux_TTa = $inputs['Travaux_TTa'];
      $bonIntervention->Observations_Camei_TTa = $inputs['Observations_Camei_TTa'];
      $bonIntervention->Observations_Client_TTa = $inputs['Observations_Client_TTa'];
      $bonIntervention->Qte_Forfait_Nuit_TTa = $inputs['Qte_Forfait_Nuit_TTa'];
      $bonIntervention->Prix_Forfait_Nuit_TTa = $inputs['Prix_Forfait_Nuit_TTa'];
      //$bonIntervention->Total_Km_TTa = $inputs['Total_Km_TTa'];
      //$bonIntervention->PeageTTC_TTa = $inputs['PeageTTC_TTa'];
      //$bonIntervention->Prix_Km_TTa = $inputs['Prix_Km_TTa'];
      //$bonIntervention->Total_Trajet_U_TTa = $inputs['Total_Trajet_U_TTa'];
      $bonIntervention->Type_Elec = isset($inputs['Type_Elec']);
      $bonIntervention->Type_Tech = isset($inputs['Type_Tech']);
      $bonIntervention->Type_Autom = isset($inputs['Type_Autom']);
      $bonIntervention->Type_Etude = isset($inputs['Type_Etude']);
      $bonIntervention->Fact_TFCl = isset($inputs['Fact_TFCl']);
      //$bonIntervention->NFacture_TFCl = $inputs['NFacture_TFCl'];
      //$bonIntervention->Date_TFCl = $inputs['Date_TFCl'];
      //$bonIntervention->Total_MO_HT_TTa = $inputs['Total_MO_HT_TTa'];
      //$bonIntervention->Total_Achat_HT_TTa = $inputs['Total_Achat_HT_TTa'];
      //$bonIntervention->Total_Vente_HT_TTa = $inputs['Total_Vente_HT_TTa'];
      //$bonIntervention->Total_Trajet_HT_TTa = $inputs['Total_Trajet_HT_TTa'];
      //$bonIntervention->Total_Depl_HT_TTa = $inputs['Total_Depl_HT_TTa'];
      //$bonIntervention->Total_HT_TTa = $inputs['Total_HT_TTa'];
      //$bonIntervention->TVA_TTa = $inputs['TVA_TTa'];
      $bonIntervention->Total_TVA_TTa = $inputs['Total_TVA_TTa'];
      //$bonIntervention->Total_TTC_TTa = $inputs['Total_TTC_TTa'];

      $bonIntervention->save();
    }

    public function getPaginate($n)
    {
      return $this->bonIntervention->paginate($n);
    }

    public function store(Array $inputs)
    {
      $bonIntervention = new $this->bonIntervention;

       //$collaborateur->password = bcrypt($inputs['password']);


      $this->save($bonIntervention, $inputs);

      return $bonIntervention;
    }

    public function getById($Id_TTa)
    {
      return $this->bonIntervention->findOrFail($Id_TTa);
    }

    public function update($Id_TTa, Array $inputs)
    {
      $this->save($this->getById($Id_TTa), $inputs);
    }

    public function destroy($Id_TTa)
    {
      $this->getById($Id_TTa)->delete();
    }
}
