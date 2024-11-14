<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'years_record',
        'desc',
        'flag'
    ];
}
