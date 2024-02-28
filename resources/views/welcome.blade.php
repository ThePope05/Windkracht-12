<x-app-layout>
    <video id="video-background" autoplay muted loop class="z-0 absolute">
        <source src="{{ asset('/vids/Beach_L-to-R.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="z-10 text-light-aqua absolute top-[30%] right-[15%] font-anton">
        <p class="text-9xl pr-20">Windkracht-XII</p>
        <hr class="border-4 mb-2 rounded">
        <p class="text-4xl text-right">"sneller dan de wind"</p>
    </div>

    <script>
        const videoSources = [
            "{{ asset('/vids/Beach_L-to-R.mp4') }}",
            "{{ asset('/vids/Beach_R-to_L.mp4') }}"
        ];
        var currentVideo = 0;
        var video = document.getElementById('video-background');

        function switchVideo() {
            if (currentVideo === 0) {
                currentVideo = 1;
            } else {
                currentVideo = 0;
            }
            video.src = videoSources[currentVideo];
        }

        setInterval(switchVideo, 25000);
    </script>
</x-app-layout>