<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "obat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_obat', 'jenis_obat', 'kegunaan', 'efek'
    ];
}
