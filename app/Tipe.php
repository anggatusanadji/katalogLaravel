<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipe extends Model
{
    use SoftDeletes;
    
    protected $table="tb_tipe_buku";
    protected $fillable = ['tipe_buku'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}