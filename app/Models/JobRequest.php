<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model {
    use HasFactory;
    protected $fillable = ['fullname', 'email', 'address', 'postalcode', 'phone', 'job'];
}
