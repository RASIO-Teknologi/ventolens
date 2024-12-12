<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukList extends Model
{
    use HasFactory;

    protected $table = 'produk_list';

    public function gambar()
    {
        $gambar = $this->gambar;
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/produk-list/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }

    public function harga()
    {
        return number_format($this->harga,0,',','.');
    }
}
