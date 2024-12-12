<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\CMS\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhatsappController extends Controller
{
    public function index()
    {
        $whatsapp = Whatsapp::first();

        return view('back.whatsapp.index', compact('whatsapp'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $whatsapp = Whatsapp::first();

            if ($whatsapp != null) {
                $whatsapp->telepon    = $request->telepon;
                $whatsapp->save();
            } else {
                $whatsapp             = new Whatsapp();
                $whatsapp->telepon    = $request->telepon;
                $whatsapp->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Nomer Whatsapp berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
