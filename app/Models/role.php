<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable=['nom',];

    public function users(){
        return $this->belongsToMany(\App\Model\User::class);
    }
}
