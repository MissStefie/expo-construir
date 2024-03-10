<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = "visitors";
    protected $fillable = ['nombre', 'telefono', 'correo'];
    public $timestamps = false;
    use HasFactory;
}
