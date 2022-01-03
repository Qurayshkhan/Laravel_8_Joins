<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countery extends Model
{
    use HasFactory;
    protected $table='counterys';
    protected $fillable=array('countery_name');
}
