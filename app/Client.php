<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Pour indiquer quelle la clef primaire de la table
    protected $primaryKey = 'Id_TCl';

    //pour indiquer le nom de table
    protected $table = "T_Clients";

    //on retrouve toutes les colonnes des la table
    protected $fillable = ['An_TCl','Ste_TCl','Adr_Fact_TCl','Contact_TCl','Tel_TCl',
    'Fax_TCl','EMail_TCl','Web_TCl','Mdr_TCl','Information_TCl','Siret_TCl',
    'Siren_TCl','TPE_TCl','PME_PMI_TCl','ETI_TCl','Grands_Comptes_TCl','Particulier_TCl',
    'Collec_TCl','Tarif_Elec','Tarif_Tech','Tarif_Autom','Tarif_Etude'];

    // en mettant false se refuse que la date soit enregistrer quand on cree ou que l'on modifie un element
    public $timestamps = false;

 // cette partie de programme ne fonctionne pas car nous avons un soucis avec Eloquent
 // et la base de données nous avons utilisé les requetes manuellement pour resoudre notre soucis.
  //   public function contacts()
	// {
	// 	return $this->hasMany('App\Contact');
	// }
}
