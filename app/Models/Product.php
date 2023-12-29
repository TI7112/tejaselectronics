<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "tbl_product";
    protected $primaryKey = "id";
    
    protected $with = ['getCategory'];

    public function getCategory(){
        return $this->belongsTo(Category::class , 'category' , 'id');
    }
}
