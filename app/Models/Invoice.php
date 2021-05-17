<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 * @package App\Models
 */
class Invoice extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
