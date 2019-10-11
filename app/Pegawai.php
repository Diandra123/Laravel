<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "list";

    protected $fillable = ['id', 'nama', 'notelepon', 'alamat', 'email', 'alamat'];
}