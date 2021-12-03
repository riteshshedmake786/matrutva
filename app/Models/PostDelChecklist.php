<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDelChecklist extends Model
{
    use HasFactory;
    protected $table = 'tbl_post_del_checklist';
    public $timestamps = false;
}
