<x-app-layout>
    <!-- head part-->
    <div id="video-container" class="relative">
        <video id="video-background" autoplay muted loop class="w-full h-full object-cover">
            <source src="{{ asset('/vids/Beach_L-to-R.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="z-10 text-light-aqua absolute top-[30%] right-[15%] font-anton">
            <p class="text-9xl pr-20">Windkracht-XII</p>
            <hr class="border-4 mb-2 rounded">
            <p class="text-4xl text-right">"Sneller dan de wind"</p>
        </div>
    </div>
    <!-- second part-->
    <div class="z-10 bg-gradient-to-r from-aqua to absolute top-full w-full">
        <div class="container mx-auto py-20 flex justify-center">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-black text-white p-4">
                    <p>Pakket 01. | prijs</p>
                    <hr class="border-slate-50">
                    <ul>
                        <li>item 1</li>
                        <li>item 2</li>
                        <li>item 3</li>
                    </ul>
                    <button class="bg-white text-black py-2 px-4 rounded">Kies dit pakket</button>
                </div>
                <div class="bg-black text-white p-4">
                    <p>Pakket 01. | prijs</p>
                    <hr class="border-white">
                    <ul>
                        <li>item 1</li>
                        <li>item 2</li>
                        <li>item 3</li>
                    </ul>
                    <button class="bg-white text-black py-2 px-4 rounded">Kies dit pakket</button>
                </div>
                <div class="bg-black text-white p-4">
                    <p>Pakket 01. | prijs</p>
                    <hr class="border-white">
                    <ul>
                        <li>item 1</li>
                        <li>item 2</li>
                        <li>item 3</li>
                    </ul>
                    <button class="bg-white text-black py-2 px-4 rounded">Kies dit pakket</button>
                </div>
                <div class="bg-black text-white p-4">
                    <p>Pakket 01. | prijs</p>
                    <hr class="border-white">
                    <ul>
                        <li>item 1</li>
                        <li>item 2</li>
                        <li>item 3</li>
                    </ul>
                    <button class="bg-white text-black py-2 px-4 rounded">Kies dit pakket</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const videoSources = [
            "{{ asset('/vids/Beach_L-to-R.mp4') }}",
            "{{ asset('/vids/Beach_R-to_L.mp4') }}"
        ];
        var currentVideo = 0;
        var video = document.getElementById('video-background');

        video.addEventListener('ended', switchVideo);

        function switchVideo() {
            currentVideo = (currentVideo + 1) % videoSources.length;
            video.src = videoSources[currentVideo];
            video.play();
        }

        video.play();
    </script>
</x-app-layout>