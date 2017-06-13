<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'Id_TCo';

    protected $table = 'T_Contact';

    protected $fillable = ['Ste_TCl','Entite_TCo','Adr_Liv_TCl','Contact_TCo',
    'EMail_TCo','Tel_TCo','Indicatif_TCo','Port_TCo','N_Poste'];

    public $timestamps = false;

    public function clients()
{
    return $this->belongsTo('App\Client');
}

}
