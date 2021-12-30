<?php

namespace App\Http\Controllers;

use App\Models\Atribut;
use App\Models\NilaiAtribut;
use Illuminate\Http\Request;

class NilaiAtributController extends Controller
{
    public function index()
    {
        $dataNilaiAtribut = NilaiAtribut::all();
        $dataAtribut = Atribut::all();

        $datas = [
            'title' => 'Nilai Atribut',
            'dataatribut' => $dataAtribut,
            'datanilaiatribut' => $dataNilaiAtribut,
        ];

        return view('pages.nilaiatribut.index', $datas);
    }

    public function store(Request $request)
    {
        $fungsi = $request->get('fungsi');

        if ($fungsi == "tambah") {
            $validateData = $request->validate([
                'dataatribut' => 'required',
                'namaNilai' => 'required',
            ]);

            $dataatr = Atribut::find($validateData['dataatribut']);

            dd($dataatr);
        }
    }
}
