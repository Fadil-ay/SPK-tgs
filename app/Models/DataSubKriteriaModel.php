<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSubKriteriaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_data_sub_kriteria';
    protected $fillable = [
        'nama_kriteria',
        'sub_kriteria',
        'jenis',
        'kompetensi'
    ];
}
