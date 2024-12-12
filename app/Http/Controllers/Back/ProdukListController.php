<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as HelpersUser;
use App\Http\Controllers\Controller;
use App\Models\CMS\ProdukList;
use App\Models\CMS\ProdukListJudul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProdukListController extends Controller
{
    public function index()
    {
        $produkListJudul = ProdukListJudul::first();

        return view('back.produk-list.index', compact('produkListJudul'));
    }

    public function storeJudul(Request $request)
    {
        DB::beginTransaction();
        try {
            $produkListJudul = ProdukListJudul::first();

            if ($produkListJudul != null) {
                $produkListJudul->judul      = $request->judul;
                $produkListJudul->save();
            } else {
                $produkListJudul             = new ProdukListJudul();
                $produkListJudul->judul      = $request->judul;
                $produkListJudul->save();
            }

            DB::commit();
            return redirect()->back()->with('success', 'Konten Judul Produk List berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        $count = ProdukList::count();
        if($count >= 3) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }

        return view('back.produk-list.create');
    }

    public function store(Request $request)
    {
        $count = ProdukList::count();
        if($count >= 3) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }

        DB::beginTransaction();
        try {
            $produkList                 = new ProdukList();
            $produkList->nama           = $request->nama;
            $produkList->harga          = $request->harga;
            $produkList->deskripsi      = $request->deskripsi;
            $produkList->keunggulan_1   = $request->keunggulan_1;
            $produkList->keunggulan_2   = $request->keunggulan_2;
            $produkList->keunggulan_3   = $request->keunggulan_3;
            $produkList->keunggulan_4   = $request->keunggulan_4;

            $produkList->save();

            DB::commit();
            return redirect()->route('back.cms.produk-list.index')->with('success', 'Produk List berhasil ditambah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $produkList = ProdukList::findOrFail($id);

        return view('back.produk-list.edit', compact('produkList'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $produkList                 = ProdukList::findOrFail($id);
            $produkList->nama           = $request->nama;
            $produkList->harga          = $request->harga;
            $produkList->deskripsi      = $request->deskripsi;
            $produkList->keunggulan_1   = $request->keunggulan_1;
            $produkList->keunggulan_2   = $request->keunggulan_2;
            $produkList->keunggulan_3   = $request->keunggulan_3;
            $produkList->keunggulan_4   = $request->keunggulan_4;

            $produkList->save();

            DB::commit();
            return redirect()->route('back.cms.produk-list.index')->with('success', 'Produk List berhasil diedit');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $produkList = ProdukList::findOrFail($id);
            $produkList->delete();

            DB::commit();
            return response()->json([
                'message' => 'Produk List berhasil dihapus'
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
            2 => 'harga'
        );

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $input_search = $request->input('search.value');

        $rows = ProdukList::select('id', 'nama', 'harga');

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
            $nestedData['harga']   = $item->harga();
            $nestedData['actions'] = '
            <div class="btn-group">
                <a href="'.route('back.cms.produk-list.edit', $item->id).'" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                <a href="'.route('back.cms.produk-list.destroy', $item->id).'" class="btn btn-outline-danger btn-delete"><i class="fa fa-trash"></i></a>
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
