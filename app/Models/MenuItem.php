<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'url',
        'route',
        'parameters',
        'target',
        'parent_id',
        'order',
        'enable',
        'classes',
    ];
}
