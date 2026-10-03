<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
        'nama',
        'nim',
        'semester',
        'kelas',
        'whatsapp',
        'email',
        'divisi',
        'alasan',
        'agree',
        'status',
    ];
}
