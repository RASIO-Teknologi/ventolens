<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';

    public function gambar()
    {
        $gambar = $this->gambar;
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/tentang-kami/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
