<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{

    protected $fillable=[

        'name',
        'user_id'
    ];
    use HasFactory;
}
