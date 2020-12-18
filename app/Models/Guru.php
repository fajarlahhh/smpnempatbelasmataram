<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primaryKey = 'guru_id';
    public $timestamps = false;

    public function mapel()
    {
        return $this->belongsTo('App\Models\Mapel', 'mapel_id', 'mapel_id');
    }
}
