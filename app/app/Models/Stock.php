<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Gd\Commands\FillCommand;

class Stock extends Model
{
    use HasFactory;

    protected $table = 't_stocks';

    protected $fillable =[
        'product_id',
        'type',
        'quantity'
    ];
}
