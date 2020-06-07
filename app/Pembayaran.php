<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table='pembayaran';
    protected $primaryKey='id_pembayaran';
    protected $fillable=['id_penjual', 'id_pembeli', 'jenis_pembayaran','keterangan'];
}
