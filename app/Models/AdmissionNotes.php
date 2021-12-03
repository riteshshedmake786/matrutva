<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionNotes extends Model
{
    use HasFactory;
    protected $table = 'tbl_admission_notes';
    public $timestamps = false;
}
