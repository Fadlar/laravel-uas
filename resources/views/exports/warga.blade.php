<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export</title>
    <style>
        * {
            font-size: x-small;
        }
    </style>
</head>

<body>
    <h3>
        <center>Laporan Data Warga</center>
    </h3>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Agama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>Warga Negara</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Status Nikah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warga as $w)
                <tr>
                    <td>{{ $w->nik }}</td>
                    <td>{{ $w->nama }}</td>
                    <td>{{ $w->agama }}</td>
                    <td>{{ $w->tempat_lahir }}</td>
                    <td>{{ $w->tanggal_lahir }}</td>
                    <td>{{ $w->jenis_kelamin }}</td>
                    <td>{{ $w->golongan_darah }}</td>
                    <td>{{ $w->warga_negara }}</td>
                    <td>{{ $w->pendidikan }}</td>
                    <td>{{ $w->pekerjaan }}</td>
                    <td>{{ $w->status_nikah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
