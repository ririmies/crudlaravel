<?php

namespace App\Models;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;


class Product extends Model
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 255)->nullable();
            $table->text("description")->nullable();
            $table->string("photo", 255)->nullable();
            $table->decimal("price", 6, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }

    protected  $fillable = ['id','name', 'description','photo','price'];
}
