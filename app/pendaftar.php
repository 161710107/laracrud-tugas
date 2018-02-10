<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
     protected $table = 'pendaftars';
    protected $fillable = ['nama_pendaftar','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','phone'];
    public $timestamps = true;
}
