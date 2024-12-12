<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as UserHelp;
use App\Http\Controllers\Controller;
use App\Models\CMS\ClientKamiJudul;
use App\Models\CMS\ClientKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ClientKamiController extends Controller
{
    public function index()
    {
        $clientKamiJudul = ClientKamiJudul::first();

        return view('back.client-kami.index', compact('clientKamiJudul'));
    }

    public function storeJudul(Request $request)
    {
        DB::beginTransaction();
        try {
            $clientKamiJudul = ClientKamiJudul::first();

            if ($clientKamiJudul != null) {
                $clientKamiJudul->judul         = $request->judul;
                $clientKamiJudul->save();
            } else {
                $clientKamiJudul                = new ClientKamiJudul();
                $clientKamiJudul->judul         = $request->judul;
                $clientKamiJudul->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        $count = ClientKami::count();
        if($count >= 12) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }
        return view('back.client-kami.create');
    }

    public function store(Request $request)
    {
        $count = ClientKami::count();
        if($count >= 12) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }

        DB::beginTransaction();
        try {
            $clientKami         = new ClientKami();
            $clientKami->nama   = $request->nama;

            if($request->hasFile('gambar')) {
                $clientKami->gambar = UserHelp::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/client-kami/');
            }

            $clientKami->save();

            DB::commit();
            return redirect()->route('back.cms.client-kami.index')->with('success', 'Client Kami berhasil ditambah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $clientKami = ClientKami::findOrFail($id);

        return view('back.client-kami.edit', compact('clientKami'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $clientKami         = ClientKami::findOrFail($id);
            $clientKami->nama   = $request->nama;

            if($request->hasFile('gambar')) {
                $clientKami->gambar = UserHelp::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/client-kami/');
            }

            $clientKami->save();

            DB::commit();
            return redirect()->route('back.cms.client-kami.index')->with('success', 'Client Kami berhasil diedit');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $clientKami = ClientKami::findOrFail($id);
            if($clientKami->gambar !== "noimage.png") {
                File::delete('back_assets/dist/img/cms/client-kami/'. $clientKami->gambar);
            }
            $clientKami->delete();

            DB::commit();
            return response()->json([
                'message' => 'Client Kami berhasil dihapus'
			], $id != null ? 200 : 201);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function data(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'nama',
        );

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $input_search = $request->input('search.value');

        $rows = ClientKami::select('*');

        //Search Section
        if (!empty($input_search)) {
            $rows->where(function($query) use ($input_search) {
                return $query->where('nama', 'like', '%'.$input_search.'%');
            });
        }

        $totalData = $rows->count();
        $rows = $rows->offset($start)->limit($limit)->orderBy($order, $dir)->get();

        //Customize your data here
        $data = array();
        $no = 0;
        foreach ($rows as $item) {
            $no++;
            $nestedData['no']      = $no;
            $nestedData['nama']    = $item->nama;
            $nestedData['gambar']  = '<img src="'.$item->gambar().'" width="100px">';
            $nestedData['actions'] = '
            <div class="btn-group">
                <a href="'.route('back.cms.client-kami.edit', $item->id).'" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                <a href="'.route('back.cms.client-kami.destroy', $item->id).'" class="btn btn-outline-danger btn-delete"><i class="fa fa-trash"></i></a>
            </div>';

            $data[] = $nestedData;
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalData),
            "data"            => $data
        );

        return response()->json($json_data);
    }
}
