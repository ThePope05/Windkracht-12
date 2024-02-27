<x-app-layout>
    <video id="video-background" autoplay muted loop>
        <source src="{{ asset('/vids/Beach_L-to-R.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.

    </video>

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