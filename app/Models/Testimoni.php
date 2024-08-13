<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    /**
    * fillable
    *
    * @var array 
    */
    protected $table = 'testimonis';
    protected $fillable = ['user_id', 'ulasan'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
