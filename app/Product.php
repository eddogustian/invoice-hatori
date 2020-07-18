<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = []; //field apa saja yang tidak boleh (black list)
    // protected $fillable = ['title', 'description', 'price', 'stock']; //Fillable berarti mengizinkan field apa saja yang boleh menerima data.
}
