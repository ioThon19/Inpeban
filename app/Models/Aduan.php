<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    protected $table = 'aduan';

    protected $primaryKey = 'id_aduan';

    protected $fillable = [
        'tgl_aduan',
        'id_masyarakat',
        'isi_laporan',
        'foto',
        'status',
    ];

    protected $dates = ['tgl_aduan'];

    public function user () {
        return $this->hasOne(Masyarakat::class, 'id_masyarakat', 'id_masyarakat');
    }
}
