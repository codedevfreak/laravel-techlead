<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id']; // Kolom yang dapat diisi.

    /**
     * Relasi dengan tabel users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class); // Relasi setiap order dimiliki satu user.
    }
}
