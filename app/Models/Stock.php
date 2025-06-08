<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     protected $fillable = [
        'package_id',
        'package_type',
        'start_date',
        'end_date',
        'initial_stock',
        'remaining_stock',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function package()
    {
        return $this->morphTo();
    }

    public function scopeActive($query)
    {
        return $query->where('start_date', '<=', now())
            ->where('end_date', '>=', now());
    }

    public function scopeForPackage($query, $package)
    {
        return $query->where('package_id', $package->id)
            ->where('package_type', get_class($package));
    }
}
