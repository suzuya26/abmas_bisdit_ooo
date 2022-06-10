<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listOleh extends Model
{
    use HasFactory;
    protected $table = "list_oleh";
    protected $primarykey = "idlistoleh";
    protected $fillable = [
        'idoleh',
        'id',
    ];
    public $timestamps = false;
    public $guarded = [];
}
