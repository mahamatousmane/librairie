<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    use HasFactory;
    protected $fillable=['user_id','publication_id','contenu_commentaire'];
    
}
