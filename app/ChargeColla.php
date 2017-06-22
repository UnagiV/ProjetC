<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChargeColla extends Model
{
    protected $primaryKey = 'Id_TCc';

    protected $table = 'T_Collaborateurs_Charges';

    protected $fillable = ['Collaborateur_TCa','Date_TCc','Prime_TCc','PE_TCc',
    'Total_Cot_TCc','Total_Ret_TCc','Total_Salaire_TCc'];

    public $timestamps = false;
}
