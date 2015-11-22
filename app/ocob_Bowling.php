<?php

namespace OCOB;

use Illuminate\Database\Eloquent\Model;

class ocob_Bowling extends Model
{
    protected $table = 'ocob_Bowling';

    protected $fillable = ['player'];
}
