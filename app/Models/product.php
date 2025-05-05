<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'product_no';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;

    protected $fillable = [
        'product_no',
        'product_name',
        'product_price',
        'product_image',
        'status',
        'category_id',
    ];


  public function category(){


      return $this->belongsTo(category::class);





  }
}
