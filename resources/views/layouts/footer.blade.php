<footer class="">
    <div class="w-full h-[6rem] flex bg-[#4E944F] fixed bottom-0 overflow-auto tailwind-scrollbar-hide scrollbar-hide">
        <div class="w-[20rem] h-full justify-center items-center flex">
            <a href="/home">
                <img src="{{ request()->is('home') ? asset('assets/svg/home-active.svg') : asset('assets/svg/home.svg') }}" alt="home">
            </a>
        </div>
        <div class="w-[20rem] h-full justify-center items-center flex">
            <a href="/presensi">
                <img src="{{ request()->is('presensi') ? asset('assets/svg/camera-active.svg') : asset('assets/svg/camera.svg') }}" alt="camera">
            </a>
        </div>
        <div class="w-[20rem] h-full justify-center items-center flex">
            <a href="/riwayat">
                <img src="{{ request()->is('riwayat') ? asset('assets/svg/riwayat-active.svg') : asset('assets/svg/riwayat.svg') }}" alt="riwayat">
            </a>
        </div>
        <div class="w-[20rem] h-full justify-center items-center flex">
            <a href="/info">
                <img src="{{ request()->is('info') ? asset('assets/svg/info-active.svg') : asset('assets/svg/info.svg') }}" alt="info">
            </a>
        </div>
    </div>
</footer>
