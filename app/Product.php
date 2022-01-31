<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;


class Product extends Model
{
    protected  $fillable = ['id','name', 'description','photo','price'];
}
