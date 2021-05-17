<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package App\Models
 */
class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function orders() {
        return $this->hasMany(Order::class);
    }
}