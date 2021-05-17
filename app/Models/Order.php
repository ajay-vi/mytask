<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 */
class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function OrderDetails() {
        return $this->hasMany(OrderDetail::class);
    }

    public function invoice() {
        return $this->hasMany(Invoice::class);
    }
}
