<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    //
    use HasFactory;

    protected $table = 'hotels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'location',
        'speciality',
        
    ];
}
