<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'order_date',
        'products',
        'total'
    ];

    protected $casts = [
        'products' => 'array'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function users() : HasMany {
        return $this->hasMany(User::class);
    }
}
