<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Posts' }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Nama</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Bukti Piket</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Keterangan</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Waktu</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate">{{ $post->title }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate"><img class="h-16 w-16" src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" srcset=""></td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate">{{ $post->content }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate">{{ $post->created_at }}</td>
                                    {{-- <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate-400">{{ $post->updated_at }}</td> --}}
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black dark:text-slate-400">
                                        <a href="{{ route('posts.show', $post->id) }}" class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">SHOW</a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                                        <form method="post" action="{{ route('posts.destroy', $post->id) }}" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
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
</x-app-layout>
