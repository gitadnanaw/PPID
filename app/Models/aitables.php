<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aitables extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'file',
    ];
}
