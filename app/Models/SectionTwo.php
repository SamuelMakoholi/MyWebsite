<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTwo extends Model
{
    use HasFactory;

    protected $fillable=[
        'text_title',
        'who_we_are',
        'our_vision',
        'our_history',
        'abt_image'
    ];
}
