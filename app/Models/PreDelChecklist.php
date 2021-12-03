<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreDelChecklist extends Model
{
    use HasFactory;
    protected $table = 'tbl_pre_del_checklist';
    public $timestamps = false;
}
