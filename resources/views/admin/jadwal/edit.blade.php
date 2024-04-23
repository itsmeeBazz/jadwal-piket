<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($jadwal) ? 'Edit' : 'Tambah' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="POST" action="{{route('jadwal.update', $jadwal->id)}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                            <div>
                                <x-input-label for="nama" value="Nama" />
                                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="$jadwal->nama ?? old('nama')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                            </div>

                            <div>
                                <x-input-label for="hari" value="Hari" />
                                {{-- use textarea-input component that we will create after this --}}
                                <x-textarea-input id="hari" name="hari" class="mt-1 block w-full" required autofocus>{{ $jadwal->hari ?? old('hari') }}</x-textarea-input>
                                <x-input-error class="mt-2" :messages="$errors->get('hari')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>