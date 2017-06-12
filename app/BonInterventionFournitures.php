<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonInterventionFournitures extends Model
{
    protected $table = 'T_Taches_Details_Fournitures';
    protected $primaryKey = 'Id_TTaDFo';


    public function bonInterventions(){
      return $this->belongsTo('App\BonIntervention');
    }
}
