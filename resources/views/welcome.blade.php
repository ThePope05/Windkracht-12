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
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- First Black Div -->
                <div class="p-8 rounded-lg text-white bg-dark-grey">
                    <h2 class="text-2xl font-semibold mb-4 font-anton">Title 1</h2>
                    <hr class="border-b-2 border-gray-600 mb-4">
                    <ul class="list-disc pl-5 mb-4">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <button class="bg-light-aqua text-dark-grey py-2 px-4 rounded hover:bg-opacity-75 transition duration-300">Button</button>
                </div>
                <!-- Second Black Div -->
                <div class="p-8 rounded-lg text-white bg-dark-grey">
                    <h2 class="text-2xl font-semibold mb-4 font-anton">Title 1</h2>
                    <hr class="border-b-2 border-gray-600 mb-4">
                    <ul class="list-disc pl-5 mb-4">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <button class="bg-light-aqua text-dark-grey py-2 px-4 rounded hover:bg-opacity-75 transition duration-300">Button</button>
                </div>
                <!-- Third Black Div -->
                <div class="p-8 rounded-lg text-white bg-dark-grey">
                    <h2 class="text-2xl font-semibold mb-4 font-anton">Title 1</h2>
                    <hr class="border-b-2 border-gray-600 mb-4">
                    <ul class="list-disc pl-5 mb-4">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <button class="bg-light-aqua text-dark-grey py-2 px-4 rounded hover:bg-opacity-75 transition duration-300">Button</button>
                </div>
                <!-- Fourth Black Div -->
                <div class="p-8 rounded-lg text-white bg-dark-grey">
                    <h2 class="text-2xl font-semibold mb-4 font-anton">Title 1</h2>
                    <hr class="border-b-2 border-gray-600 mb-4">
                    <ul class="list-disc pl-5 mb-4">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <button class="bg-light-aqua text-dark-grey py-2 px-4 rounded hover:bg-opacity-75 transition duration-300">Button</button>
                </div>
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