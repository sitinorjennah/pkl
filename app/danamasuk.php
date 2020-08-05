<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danamasuk extends Model
{
    protected $table = "danamasuk";
    protected $primaryKey = "id_dana";
    protected $fillable = [
    'id_dana', 'kategoripemasukan_id',  'jumlah_dana', 'pengeluaran',  ];

    public function kategoripemasukan()
        {
            return $this->belongsTo(kategoripemasukan::class);
        }
    // public function mastertransaksi()
    //     {
    //         return $this->belongsTo(mastertransaksi::class);
    //     }
}
