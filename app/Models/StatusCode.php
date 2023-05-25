<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Security;
use App\Models\Coupon;

class StatusCode extends Model
{
    protected $table = 'status_codes';
    protected $primaryKey = 'status_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status_name',
    ];

    public function coupons()
    {
        return $this->hasMany(Coupon::class, 'status_id', 'status_id');
    }

    public function securities()
    {
        return $this->hasMany(Security::class, 'status_id', 'status_id');
    }
}
