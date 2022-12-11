<x-app-layout>
    <div class="container p-2 mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
        <div class="flex items-center justify-between my-3">
            <h2 class="mb-3 text-2xl font-semibold leading-tight">Detail Warga : {{ $warga->nama }}</h2>
        </div>
        <div class="bg-white rounded-md mb-10">
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Nomor Induk Keluarga</div>
                <div class="font-semibold">: {{ $warga->nik }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Nama Lengkap</div>
                <div class="font-semibold">: {{ $warga->nama }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Agama</div>
                <div class="font-semibold">: {{ $warga->agama }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Tempat Lahir</div>
                <div class="font-semibold">: {{ $warga->tempat_lahir }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Tanggal Lahir</div>
                <div class="font-semibold">: {{ $warga->tanggal_lahir }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Jenis Kelamin</div>
                <div class="font-semibold capitalize">: {{ $warga->jenis_kelamin }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Golongan Darah</div>
                <div class="font-semibold">: {{ $warga->golongan_darah }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Warga Negara</div>
                <div class="font-semibold">: {{ $warga->warga_negara }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Pendidikan</div>
                <div class="font-semibold">: {{ $warga->pendidikan }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Pekerjaan</div>
                <div class="font-semibold">: {{ $warga->pekerjaan }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Status Nikah</div>
                <div class="font-semibold">: {{ $warga->status_nikah }}</div>
            </div>
            <div class="grid grid-cols-3 px-10 py-4 w-full border-b">
                <div>Status</div>
                <div class="font-semibold">:
                    @if ($warga->status)
                        Aktif
                    @else
                        Nonaktif
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
