<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplyer extends Model
{
    //
    protected $table='suplyer';
    protected $primaryKey='id_suplyer';
    protected $fillable=['nama_suplyer', 'alamat_suplyer', 'no_hp'];
}
 