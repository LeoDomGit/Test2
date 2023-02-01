<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['id','name','idStore','price','status','note','created_at','updated_at'];

}
