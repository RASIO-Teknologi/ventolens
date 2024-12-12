<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProses extends Model
{
    use HasFactory;

    protected $table = 'gambar_proses';

    public function gambar($gambar)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/gambar-proses/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
