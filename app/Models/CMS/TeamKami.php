<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamKami extends Model
{
    use HasFactory;

    protected $table = 'team_kami';

    public function gambar($gambar)
    {
        $link = $gambar !== "noimage.png"
            ? asset('back_assets/dist/img/cms/team-kami/'. $gambar)
            : asset('back_assets/dist/img/public/'. $gambar);

        return $link;
    }
}
