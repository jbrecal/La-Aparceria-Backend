<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = []; 

    protected $fillable = [
        'product_name',
        'description'
    ];
    
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
