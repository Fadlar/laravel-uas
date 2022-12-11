<x-app-layout>
    <div class="container p-2 mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
        <div class="flex items-center justify-between my-3">
            <h2 class="mb-3 text-2xl font-semibold leading-tight">Tambah Data Warga</h2>
        </div>
        <div class="bg-white rounded-md p-10 mb-10">
            <form action="{{ route('warga.store') }}" method="POST">
                @csrf
                @method('post')
                @include('warga._form')
                <x-primary-button type="submit">
                    Simpan
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
