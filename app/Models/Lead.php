<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'lead_name',
        'status',
        'mobile',
        'email',
        'converted_at',
        'created_at',
        'updated_at'
    ];

    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}
