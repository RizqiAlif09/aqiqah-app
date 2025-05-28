<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'package_id',
        'nasi_box_package_id',
        'nasi_box_qty',
        'total_price',
        'queue_number',
        'checked_out_at',
    ];

    protected $casts = [
        'checked_out_at' => 'datetime',
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function nasiBoxPackage(): BelongsTo
    {
        return $this->belongsTo(NasiBoxPackage::class);
    }
}