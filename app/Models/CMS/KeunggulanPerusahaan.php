<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeunggulanPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'keunggulan_perusahaan';

    public function gambar($gambar)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/keunggulan/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
