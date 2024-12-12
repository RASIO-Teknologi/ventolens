<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';

    public function gambar()
    {
        $gambar = $this->gambar;
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/testimoni/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
