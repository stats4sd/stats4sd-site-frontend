@extends('layouts.app')
@section('content')
    <div class="bg-white pt-20  ">

        <!-- Title -->


        <!-- Image + Red Text Block -->
        <div class=" h-96  2xl:min-h-[20vh] overflow-hidden">

            <!-- image -->
            <div class=" w-full h-96 2xl:min-h-[20vh] ">
                <img src="{{ asset('images/test22.jpg') }}" alt="Home Page"
                     class="w-full h-full object-cover object-center filter brightness-80 ">
            </div>

            <!-- top -->
            <div class="w-full relative bottom-36 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl mx-auto text-left px-12 ">
                <h1 class="text-6xl xl:text-7xl font-bold text-white  mt-4 "> Stats4SD </h1>
            </div>
        </div>
    </div>
    <div class="w-full pt-12 md:pt-20 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl mx-auto flex flex-col md:flex-row gap-6 md:gap-12 sm:mt-12 2xl:mt-0 px-12 x mb-12">
        <div class="md:w-1/2 ">
            <p class="text-xl  text-gray-800 font-bold">
                Improving research designs, data efficiency and information for decision-making
            </p>
            <div class="bg-stats4sd-red w-20 mt-5  h-3"></div>
        </div>
        <div class="md:w-1/2 ">
            <p class="text-xl font-light text-gray-800 ">
                Stats4SD is a non-profit organisation committed to supporting sustainable development around the world using
                reliable data and analysis to inform policies and actions.
            </p>
        </div>
    </div>

    <div class="bg-white pt-8 pb-48 px-6 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl   mx-auto">
        <div class="mx-auto max-w-7xl px-4 md:px-0">
            <div class="flex flex-wrap justify-center 2xl:justify-start gap-6">

                <a href="/we-do"
                   class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center"
                         style="background-image: url('/images/qualcard.png');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-2/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-start">
                        <h3 class="text-lg font-semibold mb-2 ">What we do</h3>
                        <p class="text-sm mt-1">Read about our expertise and latest projects and see how we can help you.
                        </p>
                    </div>
                </a>
                <a href="/team"
                   class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/uscard.jpg');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-2/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-start">
                        <h3 class="text-lg font-semibold mb-2 ">Our team</h3>
                        <p class="text-sm mt-1">Meet the Stats4SD team and find the right specialist for your needs.
                        </p>
                    </div>
                </a>
                <a href="/about"
                   class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/walkcard.jpg');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-2/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-start">
                        <h3 class="text-lg font-semibold mb-2 ">About us</h3>
                        <p class="text-sm mt-1">Learn more about our philosophy, principles and how to contact us.

                            . </p>
                    </div>
                </a>
                <a href="{{ config('app.resources_site_url') }}"
                   class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center"
                         style="background-image: url('/images/resources.webp');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-2/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-start">
                        <h3 class="text-lg font-semibold mb-2 ">Resources library</h3>
                        <p class="text-xs mt-1">Search our library of resources including methods guidance and e-learning
                            materials, browse our collections and link to other resource hubs. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
