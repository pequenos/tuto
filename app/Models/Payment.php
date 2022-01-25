<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'supplier_id',
        'employed_id',
        'description',
        'amount',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employed_id', 'id');
    }

    public function methodPayment()
    {
        return $this->belongsTo(MethodPayment::class, 'payment_method_id', 'id');
    }
}
