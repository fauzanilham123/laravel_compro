<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class career extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_category',
        'position',
        'location',
        'desc',
        'flag'

    ];

     public function category(): HasMany
    {
        return $this->hasMany(category::class);
    }
}
