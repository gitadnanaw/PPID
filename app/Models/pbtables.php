<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pbtables extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'tahun',
        'nomor_peraturan',
        'file',
    ];
}