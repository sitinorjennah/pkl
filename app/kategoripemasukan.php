<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoripemasukan extends Model
{
    protected $table = "kategoripemasukan";
    protected $primaryKey = "id";
    protected $fillable = [
    'id', 'nama_kategori', ];

    public function danamasuk()
        {
            return $this->hasMany(danamasuk::class);
        }
}
