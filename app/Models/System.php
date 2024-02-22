<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class System extends Model
{
    use SoftDeletes;

    protected $fillable = [
//        'category_id',
        'name',
        'supplier',
        'model',
    ];
}
