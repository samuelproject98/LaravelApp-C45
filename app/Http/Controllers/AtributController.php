<?php

namespace App\Http\Controllers;

use App\Models\Atribut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtributController extends Controller
{
    public function index()
    {
        $dataAtribut = Atribut::all();

        $datas = [
            'title' => 'Atribut',
            'dataatribut' => $dataAtribut
        ];

        return view('pages.atribut.index', $datas);
    }

    public function store(Request $request)
    {
        $fungsi = $request->post('fungsi');

        if ($fungsi == "tambah") {
            $validatedRequest = $request->validate([
                'idAtribut' => 'required',
                'namaAtribut' => 'required'
            ]);

            $atribut = new Atribut;

            $atribut->kode_atribut = $validatedRequest['idAtribut'];
            $atribut->nama_atribut = $validatedRequest['namaAtribut'];

            $atribut->save();

            return redirect('/atribut')->with('success', 'Berhasil Menambah data.');
        } else if ($fungsi == "edit") {
            $validatedRequest = $request->validate([
                'idAtribut' => 'required',
                'namaAtribut' => 'required'
            ]);

            $atribut = Atribut::find(1);

            $atribut->kode_atribut = $validatedRequest['idAtribut'];
            $atribut->nama_atribut = $validatedRequest['namaAtribut'];

            $atribut->save();

            return redirect('/atribut')->with('success', 'Berhasil Mengupdate data.');
        } else if ($fungsi == "hapus") {
            $id = $request->get('id_atribut');

            $atribut = Atribut::find($id);

            $atribut->delete();

            return redirect('/atribut')->with('success', 'Berhasil Menghapus data.');
        }
    }
}
