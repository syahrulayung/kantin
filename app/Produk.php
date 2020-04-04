<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	protected $fillable = ['namaprodusen','namamakanan','hargamakanan','stok'];
    protected $table = "produks";
}
