<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Security;
use App\Models\StatusCode;

class Coupon extends Model
{
    protected $table = 'coupons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'isin_code',
        'payment_date',
        'record_date',
        'status_id',
    ];

    public function security()
    {
        return $this->belongsTo(Security::class, 'isin_code', 'isin_code');
    }

    public function status()
    {
        return $this->belongsTo(StatusCode::class, 'status_id', 'status_id');
    }
}
