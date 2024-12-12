<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\GambarProses;
use App\Models\CMS\GambarProsesJudul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GambarProsesController extends Controller
{
    public function index()
    {
        $gambarProses = GambarProses::first();

        return view('back.gambar-proses.index', compact('gambarProses'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $gambarProses = GambarProses::first();

            // dd($request->all());

            if ($gambarProses != null) {
                $gambarProses->judul      = $request->judul;

                $gambarProses->nama_1      = $request->nama_1;
                if($request->hasFile('gambar_1')) {
                    if($gambarProses->gambar_1 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/gambar-proses/'. $gambarProses->gambar_1);
                    }
                    $gambarProses->gambar_1 = HelpersUser::uploadImage($request, 'gambar_1', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_2      = $request->nama_2;
                if($request->hasFile('gambar_2')) {
                    if($gambarProses->gambar_2 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/gambar-proses/'. $gambarProses->gambar_2);
                    }
                    $gambarProses->gambar_2 = HelpersUser::uploadImage($request, 'gambar_2', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_3      = $request->nama_3;
                if($request->hasFile('gambar_3')) {
                    if($gambarProses->gambar_3 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/gambar-proses/'. $gambarProses->gambar_3);
                    }
                    $gambarProses->gambar_3 = HelpersUser::uploadImage($request, 'gambar_3', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_4      = $request->nama_4;
                if($request->hasFile('gambar_4')) {
                    if($gambarProses->gambar_4 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/gambar-proses/'. $gambarProses->gambar_4);
                    }
                    $gambarProses->gambar_4 = HelpersUser::uploadImage($request, 'gambar_4', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_5      = $request->nama_5;
                if($request->hasFile('gambar_5')) {
                    if($gambarProses->gambar_5 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/gambar-proses/'. $gambarProses->gambar_5);
                    }
                    $gambarProses->gambar_5 = HelpersUser::uploadImage($request, 'gambar_5', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->save();
            } else {
                $gambarProses       = new GambarProses();

                $gambarProses->judul      = $request->judul;
                $gambarProses->nama_1      = $request->nama_1;
                if($request->hasFile('gambar_1')) {
                    $gambarProses->gambar_1 = HelpersUser::uploadImage($request, 'gambar_1', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_2      = $request->nama_2;
                if($request->hasFile('gambar_2')) {
                    $gambarProses->gambar_2 = HelpersUser::uploadImage($request, 'gambar_2', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_3      = $request->nama_3;
                if($request->hasFile('gambar_3')) {
                    $gambarProses->gambar_3 = HelpersUser::uploadImage($request, 'gambar_3', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_4      = $request->nama_4;
                if($request->hasFile('gambar_4')) {
                    $gambarProses->gambar_4 = HelpersUser::uploadImage($request, 'gambar_4', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->nama_5      = $request->nama_5;
                if($request->hasFile('gambar_5')) {
                    $gambarProses->gambar_5 = HelpersUser::uploadImage($request, 'gambar_5', 'back_assets/dist/img/cms/gambar-proses/');
                }

                $gambarProses->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Gambar Proses berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
