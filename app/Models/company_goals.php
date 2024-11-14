<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_goals extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'icon',
        'target',
        'desc_icon',
        'flag'
    ];
}
