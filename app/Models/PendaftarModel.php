<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarModel extends Model
{
    use HasFactory;
    protected $table = 't_pendaftar';
    protected $primaryKey = 'pendaftar_id';
    protected $fillable = ['pendaftar_id','lowongan_id', 'name', 'gender', 'DOB', 'address', 'no_telp', 'university', 'major', 'IPK', 'status', 'path_cv'];

    public function lowongan():BelongsTo{
        return $this->belongsTo(LowonganModel::class, 'lowongan_id', 'lowongan_id');
    }
}
