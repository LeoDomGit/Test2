<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    use HasFactory;
    protected $table='stores';
    protected $fillable=['id','name','idUser','address','note','created_at','updated_at'];
}
