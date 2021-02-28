<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;
    
    protected $table="tb_buku";
    protected $fillable = ['kategori_id','judul_buku', 'deskripsi_buku', 'penerbit_id', 'penulis_buku', 
                          'jumlah_halaman', 'tahun_terbit', 'harga_buku','cover_buku', 'tipe_id', 'status'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}