<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;

    protected $table = 'promosi';

    public function gambar()
    {
        $gambar = $this->background;
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/promosi/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
