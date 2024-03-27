<div class="p-8 text-white bg-dark-grey flex flex-col justify-center items-center w-3/5 mx-auto">
    <h2 class="text-2xl font-semibold mb-4 font-anton">{{ $title }}</h2>
    <hr class="border-b-2 border-white w-full mb-4">
    <ul class="list-disc pl-5 mb-4">
        {{ $slot }}
    </ul>
    <a href="{{ route($attributes['route']) }}" class="bg-light-aqua text-dark-grey py-2 px-4 rounded-lg hover:bg-opacity-75 transition duration-300">{{ $button }}</a>
</div>