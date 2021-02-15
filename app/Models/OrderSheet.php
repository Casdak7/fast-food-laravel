<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSheet extends Model
{
    use HasFactory;

    protected $fillable = ["price", "discount"];

    public function orders()
    {
        return $this->hasMany(Order::class, "order_sheet_id");
    }

    //Make hasManyThrough Products
}
