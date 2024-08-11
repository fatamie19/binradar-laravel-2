<?php

// app/Models/Bin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    protected $fillable = [
        'name',
        'bin_id',
        'verification_code',
    ];
}