<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\KeunggulanPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KeunggulanPerusahaanController extends Controller
{
    public function index()
    {
        $keunggulan = KeunggulanPerusahaan::first();

        return view('back.keunggulan-perusahaan.index', compact('keunggulan'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $keunggulan = KeunggulanPerusahaan::first();

            if ($keunggulan != null) {
                $keunggulan->judul      = $request->judul;

                $keunggulan->keunggulan_judul_1      = $request->keunggulan_judul_1;
                $keunggulan->keunggulan_deskripsi_1  = $request->keunggulan_deskripsi_1;
                if($request->hasFile('keunggulan_gambar_1')) {
                    if($keunggulan->keunggulan_gambar_1 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_gambar_1);
                    }
                    $keunggulan->keunggulan_gambar_1 = HelpersUser::uploadImage($request, 'keunggulan_gambar_1', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_2      = $request->keunggulan_judul_2;
                $keunggulan->keunggulan_deskripsi_2  = $request->keunggulan_deskripsi_2;
                if($request->hasFile('keunggulan_gambar_2')) {
                    if($keunggulan->keunggulan_gambar_2 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_gambar_2);
                    }
                    $keunggulan->keunggulan_gambar_2 = HelpersUser::uploadImage($request, 'keunggulan_gambar_2', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_3      = $request->keunggulan_judul_3;
                $keunggulan->keunggulan_deskripsi_3  = $request->keunggulan_deskripsi_3;
                if($request->hasFile('keunggulan_gambar_3')) {
                    if($keunggulan->keunggulan_gambar_3 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_gambar_3);
                    }
                    $keunggulan->keunggulan_gambar_3 = HelpersUser::uploadImage($request, 'keunggulan_gambar_3', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_4      = $request->keunggulan_judul_4;
                $keunggulan->keunggulan_deskripsi_4  = $request->keunggulan_deskripsi_4;
                if($request->hasFile('keunggulan_gambar_4')) {
                    if($keunggulan->keunggulan_gambar_4 != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/keunggulan/'. $keunggulan->keunggulan_gambar_4);
                    }
                    $keunggulan->keunggulan_gambar_4 = HelpersUser::uploadImage($request, 'keunggulan_gambar_4', 'back_assets/dist/img/cms/keunggulan/');
                }
                $keunggulan->save();
            } else {
                $keunggulan             = new KeunggulanPerusahaan();
                $keunggulan->judul      = $request->judul;

                $keunggulan->keunggulan_judul_1      = $request->keunggulan_judul_1;
                $keunggulan->keunggulan_deskripsi_1  = $request->keunggulan_deskripsi_1;
                if($request->hasFile('keunggulan_gambar_1')) {
                    $keunggulan->keunggulan_gambar_1 = HelpersUser::uploadImage($request, 'keunggulan_gambar_1', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_2      = $request->keunggulan_judul_2;
                $keunggulan->keunggulan_deskripsi_2  = $request->keunggulan_deskripsi_2;
                if($request->hasFile('keunggulan_gambar_2')) {
                    $keunggulan->keunggulan_gambar_2 = HelpersUser::uploadImage($request, 'keunggulan_gambar_2', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_3      = $request->keunggulan_judul_3;
                $keunggulan->keunggulan_deskripsi_3  = $request->keunggulan_deskripsi_3;
                if($request->hasFile('keunggulan_gambar_3')) {
                    $keunggulan->keunggulan_gambar_3 = HelpersUser::uploadImage($request, 'keunggulan_gambar_3', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->keunggulan_judul_4      = $request->keunggulan_judul_4;
                $keunggulan->keunggulan_deskripsi_4  = $request->keunggulan_deskripsi_4;
                if($request->hasFile('keunggulan_gambar_4')) {
                    $keunggulan->keunggulan_gambar_4 = HelpersUser::uploadImage($request, 'keunggulan_gambar_4', 'back_assets/dist/img/cms/keunggulan/');
                }

                $keunggulan->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
