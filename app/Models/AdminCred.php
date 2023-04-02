<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCred extends Model
{
    use HasFactory;
    protected $table = 'admin_creds';
    protected $primaryKey = "id";
}
