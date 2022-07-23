<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = "wilayah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_wilayah', 'alamat_wilayah'
    ];
}
