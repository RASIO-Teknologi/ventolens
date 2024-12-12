<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CMS\ClientKami;
use App\Models\CMS\ClientKamiJudul;
use App\Models\CMS\Footer;
use App\Models\CMS\GambarProses;
use App\Models\CMS\Header;
use App\Models\CMS\KeunggulanPerusahaan;
use App\Models\CMS\ProdukList;
use App\Models\CMS\ProdukListJudul;
use App\Models\CMS\Promosi;
use App\Models\CMS\TeamKami;
use App\Models\CMS\TeamKamiJudul;
use App\Models\CMS\TentangKami;
use App\Models\CMS\Testimoni;
use App\Models\CMS\TestimoniJudul;
use App\Models\CMS\Whatsapp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $header                 = Header::first();
        $produkList             = ProdukList::all();
        $produkListJudul        = ProdukListJudul::first();
        $gambarProses           = GambarProses::first();
        $tentangKami            = TentangKami::first();
        $keunggulanPerusahaan   = KeunggulanPerusahaan::first();
        $teamKami               = TeamKami::all();
        $teamKamiJudul          = TeamKamiJudul::first();
        $clientKami             = ClientKami::all();
        $clientKamiJudul        = ClientKamiJudul::first();
        $promosi                = Promosi::first();
        $testimoni              = Testimoni::all();
        $testimoniJudul         = TestimoniJudul::first();
        $footer                 = Footer::first();
        $whatsapp               = Whatsapp::first();

        return view('front.home.index', compact(
            'header',
            'produkList',
            'produkListJudul',
            'gambarProses',
            'tentangKami',
            'keunggulanPerusahaan',
            'teamKami',
            'teamKamiJudul',
            'clientKami',
            'clientKamiJudul',
            'testimoni',
            'testimoniJudul',
            'promosi',
            'footer',
            'whatsapp'
        ));
    }
}
