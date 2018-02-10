<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengujiuy extends Model
{
    protected $table = 'pengujiuys';
    protected $fillable = ['nama','jabatan'];
    public $timestamps = true;
}
