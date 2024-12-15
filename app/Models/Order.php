<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = array('customer', 'track');

    public function products(){
        return $this->belongsToMany(related:Product::class,table:'orderedprods',foreignPivotKey:'order_id',relatedPivotKey:'product_id');
    }
}
