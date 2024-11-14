<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'logo',
        'no_telephone',
        'email',
        'address',
        'working_hours',
        'maps',
        'no_wa',
        'link_fb',
        'link_ig',
        'link_twitter',
        'flag'
    ];
}
