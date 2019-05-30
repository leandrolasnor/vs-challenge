<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [];
    protected $guarded = ['name','manufacturer','quantity','price'];
    protected $table = 'products';
}
