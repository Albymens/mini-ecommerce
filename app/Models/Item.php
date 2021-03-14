<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = [
        'id',
        'title',
        'price',
        'description',
        'category'
    ];
}
