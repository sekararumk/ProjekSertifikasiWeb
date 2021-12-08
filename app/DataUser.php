<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $table = 'datauser';
    protected $fillable = ['nama_penulis','nama_tempat','review','media'];

}
