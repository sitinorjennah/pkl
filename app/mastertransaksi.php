<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mastertransaksi extends Model
{
    protected $table = "mastertransaksi";
    protected $primaryKey = "id";
    protected $fillable = [
    'id', 'tgl_transaksi', 'jenis_kas', 'total' ];
    
    public function danamasuk()
    {
        return $this->hasMany(danamasuk::class);
    }

    public function pengeluaran()
    {
        return $this->hasMany(pengeluaran::class);
    }
}
