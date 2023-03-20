<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function Products()
    {
        return $this->belongsToMany(Product::class,'order','customers_id','product_id');
    }
}
