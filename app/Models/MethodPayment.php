<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodPayment extends Model
{
    use HasFactory;

    protected $table = 'payment_methods';

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function payment()
    {
        return $this->hasOne(User::class, 'payment_method_id', 'id');
    }

    public function receipt()
    {
        return $this->hasMany(Receipt::class, 'receipt_id', 'id');
    }
}
