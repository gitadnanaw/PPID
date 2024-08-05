<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ikeutables extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'tahun',
        'file',
    ];
}
