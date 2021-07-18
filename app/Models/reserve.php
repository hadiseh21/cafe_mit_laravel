<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{
    use HasFactory;
    protected $fillable=['id_user',
    'Num_tisch',
    'Date',
    'Name_user',
    'Uhr'];
}
