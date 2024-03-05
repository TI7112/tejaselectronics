<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "tbl_order";
    protected $primaryKey = "id";
    
    protected $with = ['getProduct' , 'getUser'];

    public function getProduct(){
        return $this->belongsTo(Product::class , 'product_id' , 'id');
    }

    public function getUser(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
