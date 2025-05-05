<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   Supplier extends Model
{
  use HasFactory;

  protected $fillable = [
      'Supplier'
      ];

  public function products()
  {
      //one to many relatinship ekak
      return $this->hasMany(product::class);

  }
}
