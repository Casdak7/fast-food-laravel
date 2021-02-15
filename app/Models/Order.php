<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["product_id", "order_sheet_id", "price", "discount"];

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function orderSheet()
    {
        return $this->belongsTo(OrderSheet::class, "order_sheet_id");
    }
    
}
