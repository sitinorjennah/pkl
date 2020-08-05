<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluaran";
    protected $primaryKey = "id";
    protected $fillable = [
    'id', 'tanggal', 'jenis_id', 'nama_brng', 'jumlah_brng', 'satuan_brng', 'harga_brng',  'ket',];

    public function kategoripengeluaran()
    {
        return $this->belongsTo('App\kategoripengeluaran', 'jenis_id');
    }
}
