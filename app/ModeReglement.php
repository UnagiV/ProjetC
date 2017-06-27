<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeReglement extends Model
{
    protected $primaryKey = 'Id_Mdr';

    protected $table = 'T_Mode_Reglement';

    protected $fillable = ['Des_Mdr'];

    public $timestamps = false;
}
