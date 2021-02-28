<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbit extends Model
{
    use SoftDeletes;
    
    protected $table="tb_penerbit";
    protected $fillable = ['nama_penerbit', 'alamat_penerbit', 'tlp_penerbit'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
