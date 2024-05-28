<x-app-layout>
    @section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Camera</h1>
    </nav>
    @endsection

    <div class="py-12 mb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-bg-primary shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-bg-primary shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-bg-primary shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('layouts.footer')
    </div>
</x-app-layout>
