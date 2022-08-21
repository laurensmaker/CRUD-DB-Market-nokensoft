<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelurahanModel extends Model
{
    use HasFactory;

    protected $table = 'kelurahan';
    protected $guarded = ['id'];
}
