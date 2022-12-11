<?php

namespace App\Exports;

use App\Models\Warga;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class WargaExport implements FromView
{
    public function view(): View
    {
        return view('exports.warga', [
            'warga' => Warga::all()
        ]);
    }
}
