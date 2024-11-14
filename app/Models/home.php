<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'desc_section_1',
        'count_bussines',
        'count_member',
        'count_client',
        'count_project',
        'flag'
    ];
}
