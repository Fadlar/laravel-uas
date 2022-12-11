<?php

namespace App\Http\Controllers;

use App\Exports\WargaExport;
use App\Imports\WargaImport;
use App\Models\Warga;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Pdf;

class WargaController extends Controller
{
    public function index(Request $request)
    {
        $warga = Warga::when($request->search, fn ($q, $key) => $q->where('nik', 'like', "%{$key}%")->orWhere('nama', 'like', "%{$key}%"))->latest()->paginate(10)->withQueryString();
        return view('warga.index', compact('warga'));
    }

    public function create()
    {
        $warga = new Warga();
        return view('warga.create', compact('warga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => ['required', 'unique:wargas,nik'],
            'nama' => ['required'],
            'agama' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'golongan_darah' => ['required'],
            'warga_negara' => ['required'],
            'pendidikan' => ['required'],
            'pekerjaan' => ['required'],
            'status_nikah' => ['required'],
            'status' => ['required']
        ]);

        Warga::create($request->all());
        return redirect()->route('warga.index');
    }

    public function show(Warga $warga)
    {
        return view('warga.show', compact('warga'));
    }

    public function edit(Warga $warga)
    {
        return view('warga.edit', compact('warga'));
    }

    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'nik' => ['required', 'unique:wargas,nik,' . $warga->id],
            'nama' => ['required'],
            'agama' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            'golongan_darah' => ['required'],
            'warga_negara' => ['required'],
            'pendidikan' => ['required'],
            'pekerjaan' => ['required'],
            'status_nikah' => ['required'],
            'status' => ['required']
        ]);
        $warga->update($request->all());
        return redirect()->route('warga.index');
    }

    public function destroy(Warga $warga)
    {
        $warga->delete();
        return back();
    }

    public function export_pdf()
    {
        $warga = Warga::all();

        $pdf = Pdf::loadview('exports.warga', ['warga' => $warga]);
        return $pdf->download('laporan-data-warga.pdf');
    }

    public function export_excel()
    {
        return Excel::download(new WargaExport, 'Warga.xlsx');
    }

    public function import_excel(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:csv,xlsx,xls']
        ]);
        if ($request->file('file')) {
            Excel::import(new WargaImport, $request->file('file'));
            return redirect('/warga');
        }
    }
}
