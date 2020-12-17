<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    use HasFactory;
    protected $table = 'kepala_sekolah';
    protected $primaryKey = 'kepala_sekolah_id';
    public $timestamps = false;
}
