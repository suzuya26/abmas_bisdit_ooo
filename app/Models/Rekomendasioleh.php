<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasioleh extends Model
{
    use HasFactory;
    protected $table = "rekomendasioleh";
    protected $primarykey = "idrekomendasioleh";
    protected $fillable = [
        'idoleh',
        'id',
    ];
    public $timestamps = false;
    public $guarded = [];
}
