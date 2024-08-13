<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
    * fillable
    *
    * @var array
    */
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'alamat',
        'kendaraan',
        'tanggal',
        'handphone',
    
    ];
}