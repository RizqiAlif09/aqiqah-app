<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NasiBoxPackage extends Model
{
    protected $fillable = [
        'name',
        'price',
        'contents',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function stocks()
    {
        return $this->morphMany(Stock::class, 'package');
    }

    public function transactionDetails()
    {
        return $this->morphMany(TransactionDetail::class, 'package');
    }
}
