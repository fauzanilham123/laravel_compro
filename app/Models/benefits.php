<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class benefits extends Model
{
    use HasFactory;
    protected $fillable =  [
        'id',
        'icon',
        'name',
        'flag'
    ];
}
