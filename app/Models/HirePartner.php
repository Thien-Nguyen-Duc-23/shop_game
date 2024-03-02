<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HirePartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'rate', 'token', 'user_ids'
    ];

}
