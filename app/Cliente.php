<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table ='clientes';
}
