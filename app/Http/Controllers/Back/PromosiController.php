<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\Promosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PromosiController extends Controller
{
    public function index()
    {
        $promosi = Promosi::first();

        return view('back.promosi.index', compact('promosi'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $promosi = Promosi::first();

            if ($promosi != null) {
                $promosi->judul      = $request->judul;

                if($request->hasFile('background')) {
                    if($promosi->background != 'noimage.png') {
                        File::delete('back_assets/dist/img/cms/promosi/'. $promosi->background);
                    }
                    $promosi->background = HelpersUser::uploadImage($request, 'background', 'back_assets/dist/img/cms/promosi/');
                }

                $promosi->save();
            } else {
                $promosi             = new Promosi();
                $promosi->judul      = $request->judul;

                if($request->hasFile('background')) {
                    $promosi->background = HelpersUser::uploadImage($request, 'background', 'back_assets/dist/img/cms/promosi/');
                }
                $promosi->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Promosi berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
