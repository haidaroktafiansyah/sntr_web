<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajar extends Model
{
    use HasFactory;
    protected $table = 'pengajar';
    protected $primaryKey = 'idpengajar';
    public $timestamps = false;
    use HasFactory;
}