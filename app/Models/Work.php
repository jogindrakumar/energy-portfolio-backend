<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
     protected $fillable = [
            'job_title',
            'from',
            'to',
            'job_description',
            
        ];
}
