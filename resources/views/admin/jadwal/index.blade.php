<x-app-layout>
    @if (auth()->user()->hasRole('admin'))
        <x-slot name="header">
        

        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Jadwal' }}
            </h2>
            <a href="{{ route('jadwal.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah</a>
        </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">No</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Nama</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Hari</th>
                                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @php
                                    $no = 1;
                                @endphp
    
                                @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-black">{{ $jadwal->id }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-black">{{ $jadwal->nama }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-black">{{ $jadwal->hari }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-black">
                                            <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="border transition-all border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                                            
                                            <form method="post" action="{{ route('jadwal.destroy', $jadwal->id) }}" class="inline">
                                                @csrf
                                                @method('delete')
                                                <button class="border transition-all border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>

