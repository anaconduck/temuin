<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Barangs';
     protected $fillable = [
        'name',
        'foto',
        'deskripsi',
        'nomor',
        'alamat'
    ];
}
