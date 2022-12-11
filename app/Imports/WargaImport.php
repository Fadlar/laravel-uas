<?php

namespace App\Imports;

use App\Models\Warga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WargaImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Warga([
            'nik' => $row['nik'],
            'nama' => $row['nama_lengkap'],
            'agama' => $row['agama'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => date('Y-m-d', strtotime($row['tanggal_lahir'])),
            'jenis_kelamin' => $row['jenis_kelamin'],
            'golongan_darah' => $row['golongan_darah'],
            'warga_negara' => $row['warga_negara'],
            'pendidikan' => $row['pendidikan'],
            'pekerjaan' => $row['pekerjaan'],
            'status_nikah' => $row['status_nikah'],
            'status' => $row['status'],
        ]);
    }
}
