<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'header';

    public function gambar($gambar)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/header/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
