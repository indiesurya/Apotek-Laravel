<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
    public function distributor()
    {
        return $this->belongsTo(Distributor::class);
    }  
}
