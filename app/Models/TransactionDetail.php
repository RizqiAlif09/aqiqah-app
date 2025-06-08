<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_id',
        'package_id',
        'package_type',
        'quantity',
        'price',
        'subtotal',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function package()
    {
        return $this->morphTo();
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->subtotal = $model->price * $model->quantity;
        });

        static::updating(function ($model) {
            if ($model->isDirty(['price', 'quantity'])) {
                $model->subtotal = $model->price * $model->quantity;
            }
        });
    }
}
