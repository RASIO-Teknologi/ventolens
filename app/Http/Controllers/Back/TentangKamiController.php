<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::first();

        return view('back.tentang-kami.index', compact('tentangKami'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $tentangKami = TentangKami::first();
            
            if ($tentangKami != null) {
                $tentangKami->judul         = $request->judul;
                $tentangKami->deskripsi     = $request->deskripsi;
                if($request->hasFile('gambar')) {
                    if($tentangKami->gambar != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/tentang-kami/'. $tentangKami->gambar);
                    }
                    $tentangKami->gambar = HelpersUser::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/tentang-kami/');
                }
                $tentangKami->save();
            } else {
                $tentangKami                = new TentangKami();
                $tentangKami->judul         = $request->judul;
                $tentangKami->deskripsi     = $request->deskripsi;

                if($request->hasFile('gambar')) {
                    $tentangKami->gambar = HelpersUser::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/tentang-kami/');
                }
                $tentangKami->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
