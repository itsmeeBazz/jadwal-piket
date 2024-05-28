<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="profile_image" value="Profile Image" />
            <label class="block mt-2">
                <span class="sr-only">Choose image</span>
                <input type="file" id="profile_image" name="profile_image" accept=".jpg, .jpeg, .png" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                "/>
            </label>
            <div class="shrink-0 my-2">
                <img id="featured_image_preview" class="h-14 w-14 object-cover rounded-md" src="{{ isset($post) ? Storage::url($post->profile_image) : '' }}"/>
            </div>
            {{-- <x-input-error class="mt-2"/> --}}
        </div>
        {{-- <div>
            <x-input-label for="profile_image" :value="__('Profile Image')" />
            @if(auth()->user()->profile_image)
            <img class="w-14 h-14 rounded-full border border-slate-400 object-cover my-5" src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profil">
            @else
            <img class="w-14 h-14 rounded-full border border-slate-400 object-cover my-5" src="{{ asset('assets/img/profile-circle.png') }}" alt="Profile">
            @endif
            <x-text-input id="profile_image" name="profile_image" type="file" class="mt-1 block w-full border" :value="old('image', $user->profile_image)" />
        </div> --}}
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileImageInput = document.getElementById('profile_image');
            const featuredImagePreview = document.getElementById('featured_image_preview');
            const previousImageUrl = "{{ isset($post) ? Storage::url($post->profile_image) : '' }}";

            // Menampilkan foto sebelumnya
            if (previousImageUrl) {
                featuredImagePreview.src = previousImageUrl;
            }

            // Menampilkan foto terbaru setelah diunggah
            profileImageInput.addEventListener('change', function(evt) {
                const file = this.files[0];
                if (file) {
                    featuredImagePreview.src = URL.createObjectURL(file);
                }
            });
        });
    </script>
</section>
