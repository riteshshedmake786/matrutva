<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complication extends Model
{
    use HasFactory;
    protected $table = 'tbl_complication';
    public $timestamps = false;
}
