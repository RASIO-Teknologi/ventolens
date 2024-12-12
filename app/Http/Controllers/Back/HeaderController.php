<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::first();

        return view('back.header.index', compact('header'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $header = Header::first();

            if ($header != null) {
                $header->judul      = $request->judul;
                $header->deskripsi  = $request->deskripsi;

                if($request->hasFile('logo')) {
                    if($header->logo != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/header/'. $header->logo);
                    }
                    $header->logo = HelpersUser::uploadImage($request, 'logo', 'back_assets/dist/img/cms/header/');
                }

                if($request->hasFile('background')) {
                    if($header->background != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/header/'. $header->background);
                    }
                    $header->background = HelpersUser::uploadImage($request, 'background', 'back_assets/dist/img/cms/header/');
                }

                $header->save();
            } else {
                $header             = new Header();
                $header->judul      = $request->judul;
                $header->deskripsi  = $request->deskripsi;

                if($request->hasFile('logo')) {
                    $header->logo = HelpersUser::uploadImage($request, 'logo', 'back_assets/dist/img/cms/header/');
                }

                if($request->hasFile('background')) {
                    $header->background = HelpersUser::uploadImage($request, 'background', 'back_assets/dist/img/cms/header/');
                }
                $header->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Header berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
