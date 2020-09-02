<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroCurso extends Model
{
    public $timestamps =  false;
    protected $fillable = [
        'title', 'description', 'date1','date2'
    ];
}
