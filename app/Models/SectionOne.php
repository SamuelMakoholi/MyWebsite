<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    use HasFactory;

    protected $fillable=[
        'text_main',
        'text_secondary',
        'image'
    ];
}
