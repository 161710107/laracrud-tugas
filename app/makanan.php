<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $table = 'makanans';
    protected $fillable = ['nama_makanan','ingredients','kode_produksi'];
    public $timestamps = true;
}
