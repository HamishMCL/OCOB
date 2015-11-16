<?php

namespace OCOB;

use Illuminate\Database\Eloquent\Model;

class ocob_Batting extends Model
{
    //
    protected $table = 'ocob_batting';

    protected $fillable = ['player'];
}
