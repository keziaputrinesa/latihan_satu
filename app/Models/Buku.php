<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $tabel="bukus";
    protected $primarykey="kode_buku";

    protected $guerded=[];

    public $incrementing = false;

}
