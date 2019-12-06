<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = ['r_number','name','instansi','phone','email','testimoni'];
}
