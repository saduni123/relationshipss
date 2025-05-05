<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  use HasFactory;

  protected $fillable = [
      'category'
      ];

  public function products()
  {
      //one to many relatinship ekak
      return $this->hasMany(product::class);

  }
}
