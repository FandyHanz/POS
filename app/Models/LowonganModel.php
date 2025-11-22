<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganModel extends Model
{
    use HasFactory;
    protected $table = 'm_lowongan';
    protected $primaryKey = 'lowongan_id';
    protected $fillable = ['lowongan_id','department_id', 'posisi', 'quota', 'deskripsi'];

    public function department():BelongsTo{
        return $this->belongsTo(DepartmentModel::class, 'department_id', 'department_id');
    }
}
