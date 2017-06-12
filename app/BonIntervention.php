<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonIntervention extends Model
{
    protected $primaryKey = 'Id_TTa';
    protected $table = 'T_Taches';
    public $timestamps = false;

    public function bonInterventionFournitures(){
      return $this->hasMany('App\BonInterventionFournitures', 'Id_TTa');
    }
}
