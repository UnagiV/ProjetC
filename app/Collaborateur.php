<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Collaborateur extends Model
{

  protected $primaryKey = 'Id_TCa';

  protected $table = 'T_Collaborateurs';



  protected $fillable = ['Collaborateur_TCa', 'Date_In_TCa','Date_Out_TCa', 'Acces_TCa','Responsable_TCa','TR_TCa'];

  public $timestamps = false;

  //Date_In_TCa et Date_Out_TCa sont les noms des colonnes sur notre db
  protected $dates = ['Date_In_TCa','Date_Out_TCa'];

    // public function getDateInAttribute()
    //   {
    //     return $this->attributes['Date_In_TCa']->format('d-m-Y');
    //   }

    public function getDateInAttribute($value)
      {
        return Carbon::parse($Collaborateur->Date_In_TCa)->format('d/m/Y');
      }

      public function setDateInAttribute($value)
    {
        $this->attributes[$value] = Carbon::createFromFormat('Y-m-d', $value)->toDateString();
    }








}
