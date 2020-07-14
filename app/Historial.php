<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'detalle_id';
    protected $guarded = ["detalle_id"];
    protected $table ='detalle_trabajo';
    
}
