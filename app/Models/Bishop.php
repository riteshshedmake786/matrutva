<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bishop extends Model
{
    use HasFactory;
    protected $table = 'tbl_scores_bishop';
    public $timestamps = false;
}
