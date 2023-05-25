<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Coupon;
use App\Models\StatusCode;

class Security extends Model
{
    protected $table = 'securities';
    protected $primaryKey = 'isin_code';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'isin_code',
        'description',
        'status_id',
    ];

    public function coupons()
    {
        return $this->hasMany(Coupon::class, 'isin_code', 'isin_code');
    }

    public function status()
    {
        return $this->belongsTo(StatusCode::class, 'status_id', 'status_id');
    }
}
