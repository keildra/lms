<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'lead_id',
        'contact_name',
        'converted_status',
        'stage',
        'created_at',
        'updated_at'
    ];

}
