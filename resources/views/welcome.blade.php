<x-app-layout>
    <!-- head part-->
    <section>
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
    </section>
    <!-- second part-->
    <section class="py-10 font-anton bg-gradient-to-tr from-aqua to-light">
        <div class="container mx-auto w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center">
                <!-- First Black Div -->
                {!! $packageCard !!}
            </div>
        </div>
    </section>


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