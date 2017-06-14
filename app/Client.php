<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'Id_TCl';

    protected $table = "T_Clients";

    protected $fillable = ['An_TCl','Ste_TCl','Adr_Fact_TCl','Contact_TCl','Tel_TCl',
    'Fax_TCl','EMail_TCl','Web_TCl','Mdr_TCl','Information_TCl','Siret_TCl',
    'Siren_TCl','TPE_TCl','PME_PMI_TCl','ETI_TCl','Grands_Comptes_TCl','Particulier_TCl',
    'Collec_TCl','Tarif_Elec','Tarif_Tech','Tarif_Autom','Tarif_Etude'];

    public $timestamps = false;

    public function contacts()
	{
		return $this->hasMany('App\Contact');
	}
}
