<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = ['nama_jurusan','nilai_lulus'];
    public $timestamps = true;
}
