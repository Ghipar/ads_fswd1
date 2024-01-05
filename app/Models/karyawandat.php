<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawandat extends Model
{
    protected $table = "karyawandat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'alamat', 'tgllhr', 'tgl_bergabung'
    ];
}
