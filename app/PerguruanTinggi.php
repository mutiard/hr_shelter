<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    protected $table = 'st_perguruantinggi';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date'
    ];

    public function RiwayatPendidikan()
    {
        return $this->hasMany('App\RiwayatPendidikan');
    }
}
