<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'lead_name',
        'status',
        'mobile',
        'email',
    ];

    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}
