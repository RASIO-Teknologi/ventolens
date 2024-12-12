<?php

namespace App\Http\Controllers\Back;

use App\Helpers\User as UserHelp;
use App\Http\Controllers\Controller;
use App\Models\CMS\TeamKamiJudul;
use App\Models\CMS\TeamKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class TeamKamiController extends Controller
{
    public function index()
    {
        $teamKamiJudul = TeamKamiJudul::first();

        return view('back.team-kami.index', compact('teamKamiJudul'));
    }

    public function storeJudul(Request $request)
    {
        DB::beginTransaction();
        try {
            $teamKamiJudul = TeamKamiJudul::first();

            if ($teamKamiJudul != null) {
                $teamKamiJudul->judul         = $request->judul;
                $teamKamiJudul->save();
            } else {
                $teamKamiJudul                = new TeamKamiJudul();
                $teamKamiJudul->judul         = $request->judul;
                $teamKamiJudul->save();
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
        $count = TeamKami::count();
        if($count >= 5) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }
        return view('back.team-kami.create');
    }

    public function store(Request $request)
    {
        $count = TeamKami::count();
        if($count >= 5) {
            return redirect()->back()->with('error', 'Mohon maaf data yang sudah dimasukan sudah melebihi limit');
        }

        DB::beginTransaction();
        try {
            $teamKami                   = new TeamKami();
            $teamKami->nama             = $request->nama;
            $teamKami->jobdesc          = $request->jobdesc;
            $teamKami->sosmed_link_1    = $request->sosmed_link_1;
            $teamKami->sosmed_link_2    = $request->sosmed_link_2;

            if($request->hasFile('gambar')) {
                $teamKami->gambar = UserHelp::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/team-kami/');
            }

            if($request->hasFile('sosmed_icon_1')) {
                $teamKami->sosmed_icon_1 = UserHelp::uploadImage($request, 'sosmed_icon_1', 'back_assets/dist/img/cms/team-kami/');
            }

            if($request->hasFile('sosmed_icon_2')) {
                $teamKami->sosmed_icon_2 = UserHelp::uploadImage($request, 'sosmed_icon_2', 'back_assets/dist/img/cms/team-kami/');
            }

            $teamKami->save();

            DB::commit();
            return redirect()->route('back.cms.team-kami.index')->with('success', 'Team Kami berhasil ditambah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $teamKami = TeamKami::findOrFail($id);

        return view('back.team-kami.edit', compact('teamKami'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $teamKami                   = TeamKami::findOrFail($id);
            $teamKami->nama             = $request->nama;
            $teamKami->jobdesc          = $request->jobdesc;
            $teamKami->sosmed_link_1    = $request->sosmed_link_1;
            $teamKami->sosmed_link_2    = $request->sosmed_link_2;

            if($request->hasFile('gambar')) {
                $teamKami->gambar = UserHelp::uploadImage($request, 'gambar', 'back_assets/dist/img/cms/team-kami/');
            }

            if($request->hasFile('sosmed_icon_1')) {
                $teamKami->sosmed_icon_1 = UserHelp::uploadImage($request, 'sosmed_icon_1', 'back_assets/dist/img/cms/team-kami/');
            }

            if($request->hasFile('sosmed_icon_2')) {
                $teamKami->sosmed_icon_2 = UserHelp::uploadImage($request, 'sosmed_icon_2', 'back_assets/dist/img/cms/team-kami/');
            }

            $teamKami->save();

            DB::commit();
            return redirect()->route('back.cms.team-kami.index')->with('success', 'Team Kami berhasil diedit');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $teamKami = TeamKami::findOrFail($id);
            if($teamKami->gambar !== "noimage.png") {
                File::delete('back_assets/dist/img/cms/team-kami/'. $teamKami->gambar);
            }
            $teamKami->delete();

            DB::commit();
            return response()->json([
                'message' => 'Team Kami berhasil dihapus'
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

        $rows = TeamKami::select('*');

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
            $nestedData['gambar']  = '<img src="'.$item->gambar($item->gambar).'" width="100px">';
            $nestedData['actions'] = '
            <div class="btn-group">
                <a href="'.route('back.cms.team-kami.edit', $item->id).'" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                <a href="'.route('back.cms.team-kami.destroy', $item->id).'" class="btn btn-outline-danger btn-delete"><i class="fa fa-trash"></i></a>
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
