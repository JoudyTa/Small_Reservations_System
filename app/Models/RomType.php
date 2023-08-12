<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomType extends Model
{
    use HasFactory;
      protected $fillable = [
        'king_bed/twin_bed',
    ];
}
