<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Warga') }}
        </h2>
    </x-slot>
    <div class="container p-2 mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
        <div class="flex items-center justify-between my-3">
            <form method="get" action="/warga">
                <input type="search" name="search" value="{{ old('search') ?? request()->search }}"
                    class="rounded-lg border-0 placeholder:text-sm focus:border-0 focus:ring-0 shadow"
                    placeholder="Cari NIK atau Nama ...">
            </form>
            <div class="flex gap-x-2">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 shadow">
                            <div>Export / Import</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('export.pdf')">
                            {{ __('Export Pdf') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('export.excel')">
                            {{ __('Export Excel') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
                <x-primary-button x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                    {{ __('Import Excel') }}</x-primary-button>

                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('import.excel') }}" class="p-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            Masukan file excel
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Silahkan download template excel terlebih dahulu') }}
                            <a href="Format File Excel Data Warga.xlsx" download="Format File Excel Data Warga.xlsx"
                                class="text-blue-600">disini</a>.
                        </p>

                        <div class="mt-6">
                            <x-input-label for="file" value="File" class="sr-only" />

                            <x-text-input id="file" name="file" type="file"
                                class="mt-1 block w-3/4 file:bg-gray-800 file:text-white file:border-0 file:rounded-full file:px-5 file:py-1 shadow-none file:mr-3 cursor-pointer file:cursor-pointer focus:outline-none" />
                        </div>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-primary-button class="ml-3">
                                {{ __('Import') }}
                            </x-primary-button>
                        </div>
                    </form>
                </x-modal>

                <x-primary-link href="{{ route('warga.create') }}">Tambah Warga</x-primary-link>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-xs">
                <thead class="rounded-t-lg bg-gray-200 dark:bg-gray-700">
                    <tr class="text-right">
                        <th class="p-3 text-left">#</th>
                        <th class="p-3 text-left">NIK</th>
                        <th class="p-3 text-left">Nama</th>
                        <th class="p-3 text-left">Agama</th>
                        <th class="p-3 text-left">Tempat Lahir</th>
                        <th class="p-3 text-left">Tanggal Lahir</th>
                        <th class="p-3 text-left">Jenis Kelamin</th>
                        <th class="p-3 text-left">Golongan darah</th>
                        <th class="p-3 text-left"><span class="sr-only">aksi</span></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($warga as $w)
                        <tr class="text-right border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-800">
                            <td class="px-3 py-2 text-left">
                                <span>{{ $loop->iteration }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ $w->nik }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ $w->nama }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ $w->agama }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ $w->tempat_lahir }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ date('d F Y', strtotime($w->tanggal_lahir)) }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span class="capitalize">{{ $w->jenis_kelamin }}</span>
                            </td>
                            <td class="px-3 py-2 text-left">
                                <span>{{ $w->golongan_darah }}</span>
                            </td>
                            <td class="px-3 py-2 text-right space-x-1">
                                <a href="{{ route('warga.show', $w->id) }}"
                                    class="rounded-full text-xs hover:bg-blue-600/70 px-2 text-white font-semibold py-0.5 bg-blue-600 transition duration-300">
                                    Detail
                                </a>
                                <a href="{{ route('warga.edit', $w->id) }}"
                                    class="rounded-full text-xs hover:bg-green-600/70 px-2 text-white font-semibold py-0.5 bg-green-600 transition duration-300">
                                    Edit
                                </a>
                                <form action="{{ route('warga.destroy', $w->id) }}" method="POST" class="inline-flex">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="rounded-full text-xs hover:bg-red-600/70 px-2 text-white font-semibold py-0.5 bg-red-600 transition duration-300">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="py-2 text-center">Data tidak ada.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-end mt-5">{{ $warga->links() }}</div>
    </div>
</x-app-layout>
