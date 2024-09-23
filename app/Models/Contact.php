<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'lead_id',
        'contact_name',
        'converted_status',
        'stage',
    ];

    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}
