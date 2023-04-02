<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    protected $table = 'specializations';
    protected $primaryKey = "id";

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'id');
    }
}
