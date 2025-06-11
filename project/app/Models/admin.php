<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    protected $guarded = [];
    
    public function initials(){
    $names = explode(' ', $this->name); // assuming you have a 'name' field
    $initials = '';

    foreach ($names as $n) {
        $initials .= strtoupper(substr($n, 0, 1));
    }

    return $initials;
    }
}