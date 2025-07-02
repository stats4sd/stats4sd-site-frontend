@extends('layouts.app')
@section('content')
    <div class="bg-white pt-20 pb-12 mt-10">

        <!-- Title -->
       

        <!-- Image + Red Text Block -->
        <div class="flex flex-col md:flex-row md:h-96 2xl:min-h-[20vh] 2xl:h-auto overflow-hidden">

            <!-- Left: Image -->
            <div class="md:w-2/3 w-full h-96 2xl:min-h-[20vh] ">
                <img src="{{ asset('images/front-page.webp') }}" alt="Home Page"
                    class="w-full h-full object-cover object-center">
            </div>


            <!-- Right: Red Block -->
            <div
                class="md:w-1/3 md:min-w-92 w-full bg-stats4sd-red relative flex flex-col items-start justify-end p-12">
                <div class="bg-white w-24 h-2"></div>
                 <h1 class="text-6xl font-bold text-white   mt-4 ml-10 md:ml-0"> Stats4SD </h1>
                <p class="text-white text-lg font-semibold pt-6">
                    {{ t('Improving research designs, data efficiency and information for decision-making') }}
                </p>
            </div>
        </div>
    </div>
    <div class="max-w-screen-lg text-center mx-auto">

      <p class="text-xl font-light text-gray-800">
      Stats4SD is a non-profit organisation committed to supporting sustainable development around the world using reliable data and analysis to inform policies and actions. 
      </p>
            <div class="bg-stats4sd-red w-20 mt-10 mb-5 mx-auto  h-3"></div>
    </div>
    <div class="bg-white pt-8 pb-48 px-6 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl   mx-auto">
            <div class="mx-auto max-w-7xl px-4 md:px-0">
                <div class="flex flex-wrap justify-center 2xl:justify-start gap-6">
                    
                        <a href="/we-do"
                            class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('/images/wedo/rm/qual.png');">
                            </div>

                            <!-- Bottom Half Overlay -->
                            <div
                                class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                                <h3 class="text-lg font-semibold ">What we do</h3>
                                <p class="text-sm mt-1">Read about our expertise and latest projects and see how we can help you.</p>
                            </div>
                        </a>
                        <a href="/wedo"
                            class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('/images/teamcard.png');">
                            </div>

                            <!-- Bottom Half Overlay -->
                            <div
                                class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                                <h3 class="text-lg font-semibold ">Our team</h3>
                                <p class="text-sm mt-1">Meet the Stats4SD team and find the right specialist for your needs.
                                </p>
                            </div>
                        </a>
                          <a href="/wedo"
                            class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('/images/walk.jpg');">
                            </div>

                            <!-- Bottom Half Overlay -->
                            <div
                                class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                                <h3 class="text-lg font-semibold ">About us</h3>
                                <p class="text-sm mt-1">Learn more about our philosophy, principles and how to contact us.

.                               </p>
                            </div>
                        </a>
                         <a href="/wedo"
                            class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('/images/resources.webp');">
                            </div>

                            <!-- Bottom Half Overlay -->
                            <div
                                class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                                <h3 class="text-lg font-semibold ">Resources library</h3>
                                <p class="text-sm mt-1">Search our library of resources including methods guidance and e-learning materials, browse our collections and link to other resource hubs
.

.                               </p>
                            </div>
                        </a>
                </div>
            </div>
        </div>
    @endsection
