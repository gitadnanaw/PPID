<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uutables extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'tahun',
        'nomor_peraturan',
        'file',
    ];
}
