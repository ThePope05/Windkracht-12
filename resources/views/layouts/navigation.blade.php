<nav x-data="{ open: false }" class=" bg-transparent absolute top-0 mt-28 z-20 w-full transition-colors">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between">

        <!-- Primary Navigation Menu -->
        <div class="py-4 max-w-7xl">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('welcome') }}" class="hover:text-light text-light-aqua transition-colors font-anton text-3xl">
                    Windkracht-XII
                </a>
            </div>
        </div>

        <div class="py-4 max-w-7xl">
            <div class="flex-shrink-0 flex items-center">
                @if(Auth::check())
                <x-route-button filled :route="route('dashboard')">
                    Dashboard
                </x-route-button>
                <hr class="ml-6 h-8 w-1 border-2 border-light-aqua rounded">
                <x-route-button :route="route('profile.edit')">
                    {{ Auth::user()->name }}
                </x-route-button>
                @else
                <x-route-button filled :route="route('login')">
                    Login
                </x-route-button>
                <hr class="ml-6 h-8 w-1 border-2 border-light-aqua rounded">
                <x-route-button :route="route('register')">
                    Register
                </x-route-button>
                @endif
            </div>
        </div>
</nav>