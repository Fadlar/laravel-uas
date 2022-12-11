<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="nik" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Nomor Induk Keluarga
        </label>
        <input type="number" name="nik" id="nik" class="rounded-md border border-gray-300 w-full"
            value="{{ old('nik') ?? $warga->nik }}" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Nama Lengkap
        </label>
        <input type="text" name="nama" id="nama" class="rounded-md border border-gray-300 w-full"
            value="{{ old('nama') ?? $warga->nama }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="agama" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Agama
        </label>
        <select name="agama" id="agama" class="rounded-md border border-gray-300 w-full" required>
            <option @if ($warga->agama === 'Islam') selected @endif value="Islam">Islam</option>
            <option @if ($warga->agama === 'Kristen') selected @endif value="Kristen">Kristen</option>
            <option @if ($warga->agama === 'Katolik') selected @endif value="Katolik">Katolik</option>
            <option @if ($warga->agama === 'Hindu') selected @endif value="Hindu">Hindu</option>
            <option @if ($warga->agama === 'Budha') selected @endif value="Budha">Budha</option>
            <option @if ($warga->agama === 'Konghucu') selected @endif value="Konghucu">Konghucu</option>
        </select>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="tempat_lahir" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Tempat Lahir
        </label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="rounded-md border border-gray-300 w-full"
            value="{{ old('tempat_lahir') ?? $warga->tempat_lahir }}" required>
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Tanggal Lahir
        </label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="rounded-md border border-gray-300 w-full"
            value="{{ old('tanggal_lahir') ?? $warga->tanggal_lahir }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="jenis_kelamin" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Jenis Kelamin
        </label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="rounded-md border border-gray-300 w-full" required>
            <option @if ($warga->jenis_kelamin === 'laki - laki') selected @endif value="laki-laki">Laki-Laki</option>
            <option @if ($warga->jenis_kelamin === 'wanita') selected @endif value="wanita">Wanita</option>
        </select>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="golongan_darah" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Golongan Darah
        </label>
        <input type="text" name="golongan_darah" id="golongan_darah" class="rounded-md border border-gray-300 w-full"
            maxlength="3" value="{{ old('golongan_darah') ?? $warga->golongan_darah }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-3">
    <div class="mb-3">
        <label for="warga_negara" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Warga Negara
        </label>
        <input type="text" name="warga_negara" id="warga_negara" class="rounded-md border border-gray-300 w-full"
            value="{{ old('warga_negara') ?? $warga->warga_negara }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x3">
    <div class="mb-3">
        <label for="pendidikan" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Pendidikan
        </label>
        <input type="text" name="pendidikan" id="pendidikan" class="rounded-md border border-gray-300 w-full"
            value="{{ old('pendidikan') ?? $warga->pendidikan }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x3">
    <div class="mb-3">
        <label for="pekerjaan" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Pekerjaan
        </label>
        <input type="text" name="pekerjaan" id="pekerjaan" class="rounded-md border border-gray-300 w-full"
            value="{{ old('pekerjaan') ?? $warga->pekerjaan }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x3">
    <div class="mb-3">
        <label for="status_nikah" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Status Nikah
        </label>
        <input type="text" name="status_nikah" id="status_nikah" class="rounded-md border border-gray-300 w-full"
            value="{{ old('status_nikah') ?? $warga->status_nikah }}" required>
    </div>
</div>
<div class="grid grid-cols-2 gap-x3">
    <div class="mb-3">
        <label for="status" class="block tracking-tight text-gray-700 text-sm font-semibold mb-1">
            Status
        </label>
        <select name="status" id="status" class="rounded-md border border-gray-300 w-full" required>
            <option @if ($warga->status === 1) selected @endif value="1">Aktif</option>
            <option @if ($warga->status === 0) selected @endif value="0">Nonaktif</option>
        </select>
    </div>
</div>
