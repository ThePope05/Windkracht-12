<a href="{{ $attributes['route'] }}" class="{{ isset($attributes['filled']) ? 'bg-light-aqua hover:bg-light text-dark-grey' : 'text-light-aqua hover:text-light'}} px-6 py-2 rounded-lg transition-colors font-robotoMono {{ ($attributes['route'] == request()->url()) ? 'text-orange-400' : '' }}">
    {{ $slot }}
</a>