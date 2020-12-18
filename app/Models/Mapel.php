<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $primaryKey = 'mapel_id';
    public $timestamps = false;

    public function guru()
    {
        return $this->hasMany('App\Models\Guru', 'mapel_id', 'mapel_id');
    }
}
