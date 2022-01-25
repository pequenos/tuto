<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'user_id',
        'payment_id',
        'address',
        'dni',
        'cellphone',
        'salary',
        'workstation'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public  function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
