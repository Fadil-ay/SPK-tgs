<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlternatifModel extends Model
{
    use HasFactory;

    protected $table = 'tb_data_alternatif';
    protected $fillable = [
        'nama_alternatif',
    ];
}
