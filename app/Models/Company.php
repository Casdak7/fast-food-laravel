<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function products()
    {
        $this->hasMany(Product::class, "company_id");
    }

    //Make Has many through relationship with OrderSheets here
}
