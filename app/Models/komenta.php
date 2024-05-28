<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komenta extends Model
{
    use HasFactory;
    protected $table = 'komenta';

    public function user()
    {

    return $this->belongsTo(User::class);

    }
}
