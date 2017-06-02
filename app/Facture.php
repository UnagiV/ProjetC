<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $primaryKey = 'Id_TFCl';

    protected $table = 'T_Factures';

    protected $fillable = ['Ste_TCl','NClient','Contact_TCo','Responsable_TCa',
    'NFacture_TFCl','NDevis_TDv','NCommande_TDv','Devis_Pct_TCl','Devis_Type_TCl',
    'Mdr_TCl','Adr_Fact_TCl','PctTVA_TFCl','Acpte_TFCl','Date_TFCl','Ech_TFCl',
    'Send_TFCl','Cpt_TFCl','Paid_TFCl','Avoir_TFCl','BlNote_TFCl',
    'Total_MO_HT_TFCl','Total_Vente_HT_TFCl','Total_Trajet_HT_TFCl',
    'Total_Depl_HT_TFCl','Total_HT_TFCl','Total_TVA_TFCl','Total_TTC_TFCl'];

    public $timestamps = false;

}
