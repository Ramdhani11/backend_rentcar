<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'tgl_awal',
        'tgl_akhir',
        'waktu',
    ];

    /**
     * Get the user that owns the Rent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }

    /**
     * Get the car that owns the Rent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'id_car', 'id');
    }
}
