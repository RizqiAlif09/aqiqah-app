<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AqiqahPackage extends Model
{
     protected $fillable = [
        'name',
        'description',
        'price',
        'cooking_cost',
        'sate_quantity',
        'gulai_quantity',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'cooking_cost' => 'decimal:2',
    ];

    public function stocks()
    {
        return $this->morphMany(Stock::class, 'package');
    }

    public function transactionDetails()
    {
        return $this->morphMany(TransactionDetail::class, 'package');
    }

    public function getTotalPriceAttribute()
    {
        return $this->price + $this->cooking_cost;
    }
}
