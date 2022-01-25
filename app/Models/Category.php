<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function supliers()
    {
        return $this->hasMany(Supplier::class, 'category_id', 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}