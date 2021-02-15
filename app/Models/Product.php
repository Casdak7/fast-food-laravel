<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "discount", "company_id", "image"];

    public function company()
    {
        return $this->belongsTo(Company::class, "company_id");
    }
}
