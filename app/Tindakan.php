<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $table = "tindakan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_tindakan', 'status_tindakan', 'tgl_tindakan'
    ];
}
