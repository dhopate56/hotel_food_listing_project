<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    //
    use HasFactory;
    protected $table = 'food';
    protected $primaryKey = 'id';

    protected $fillable = [
        'dish_name',
        'category',
        'price',
        'hotel_name'
    ];
}
