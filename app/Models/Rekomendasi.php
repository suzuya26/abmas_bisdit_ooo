<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;
    protected $table = "rekomendasi";
    protected $primarykey = "idrekomendasi";
    protected $fillable = [
        'idtoko',
        'id',
    ];
    public $timestamps = false;
    public $guarded = [];
}
