<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'no_telp',
        'reser_date',
        'table_id',
        'guest_number',
    ];

    protected $dates = [
        'reser_date' 
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
