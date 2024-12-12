<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientKami extends Model
{
    use HasFactory;

    protected $table = 'client_kami';

    public function gambar()
    {
        $gambar = $this->gambar;
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/client-kami/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
