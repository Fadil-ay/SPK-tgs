<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKriteriaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_data_kriteria';
    protected $fillable = [
        'nama_kriteria',
        'sub_kriteria',
        'bobot'
    ];
}
