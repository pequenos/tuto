<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $table = 'receipts';

    protected $fillable = [
        'customer_id',
        'payment_method_id',
        'article_id',
        'amount',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function custumer()
    {
        return $this->belongsTo(Custumers::class, 'customer_id', 'id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(MethodPayment::class, 'payment_method_id', 'id');
    }

}
