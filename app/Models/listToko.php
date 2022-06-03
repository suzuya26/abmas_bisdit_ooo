<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listToko extends Model
{
    use HasFactory;
    protected $table = "list_toko";
    protected $primarykey = "idlisttoko";
    protected $fillable = [
        'idtoko',
        'id',
    ];
    public $timestamps = false;
    public $guarded = [];
}
