<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'patient_name',
        'phone',
        'email',
        'specialty',
        'preferred_date',
        'message',
        'status',
    ];

    /**
     * The default attributes for the model.
     *
     * @var array<string, string>
     */
    protected $attributes = [
        'status' => 'pendente',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'preferred_date' => 'date',
        ];
    }
}
