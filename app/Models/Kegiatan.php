<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'kegiatan_id';

    public function getKegiatanIsiSelengkapnyaAttribute()
    {
        if(strpos("{$this->kegiatan_isi}","</p><p>")){
            $berita = explode('</p><p>', "{$this->kegiatan_isi}");
            return $berita[0];
        }else{
            $berita = explode('. ', "{$this->kegiatan_isi}");
            return $berita[0];
        }
    }
}
