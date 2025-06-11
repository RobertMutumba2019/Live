<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class city extends Model
{
    //
    use HasFactory;
    protected $fillable = ['code', 'name'];

     public function roles()
    {
        return $this->hasMany(city::class);
    }
}
