<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = "inventaris";
    protected $primaryKey = "id";
    protected $fillable = [
    'id', 'kode', 'nama_brng', 'jmlh_brng', 'status'];

    public function pengeluaran()
    {
        return $this->hasMany(pengeluaran::class);
    }
}
