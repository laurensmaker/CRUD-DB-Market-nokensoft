<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrikModel extends Model
{
    use HasFactory;

    protected $table = 'distrik';
    protected $guarded = ['id'];
}
