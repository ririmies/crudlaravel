<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Task extends Model
{
 public $fillable = ['id','name', 'description','photo','price'];
}
