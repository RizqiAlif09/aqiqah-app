<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Transaction extends Model
{
    protected $fillable = [
        'invoice_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'notes',
        'total_amount',
        'status',
        'done',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'done' => 'boolean',
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function markAsCompleted()
    {
        $this->update([
            'status' => 'completed',
            'done' => true,
        ]);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->invoice_number)) {
                $model->invoice_number = 'INV-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            }
        });
    }
}
