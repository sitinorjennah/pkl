<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoripengeluaran extends Model
{
    protected $table = "kategoripengeluaran";
    protected $primaryKey = "id";
    protected $fillable = [
    'id', 'nama_kp', ];

    public function pengeluaran()
    {
        return $this->hasMany('App\pengeluaran', 'jenis_id');
    }
}
