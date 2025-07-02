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
    @php
        $options = [
            ['label' => t('Research methods and analysis'), 'url' => '/we-do/research-methods'],
            ['label' => t('Agriculture and food systems'), 'url' => '/we-do/food-systems'],
            ['label' => t('Sustainable development'), 'url' => '/we-do/sustainable-devlopment'],
            ['label' => t('Data systems and platforms'), 'url' => '/we-do/data-systems'],
            ['label' => t('M&E and impact assessment'), 'url' => '/we-do/m-and-e'],
            ['label' => t('E-learning'), 'url' => '/we-do/e-learning'],
        ];
    @endphp
    <div class=" w-full flex flex-col gap-0 lg:flex-row lg:justify-between bt-12 lg:my-12">
        <div class="flex flex-col w-full lg:w-2/3 xl3-w-24 my-12 pr-8 lg:pr-36 -xl3-mr-36 ">
            <!-- Left Column top row-->
            <div class="flex flex-row justify-between items-start w-full">
                <!-- left border -->
                <div class="w-4 xl:w-6 mr-8 xl:mr-22 bg-stats4sd-red h-20 flex-shrink-0"></div>

                <!-- Left main section top row-->
                <div class="w-full lg:max-w-[700px]">
                    <!-- Titles -->
                    <div class="">
                        <h2 class="text-stats4sd-red text-xl font-bold uppercase">
                            {{ t('Our work') }}
                        </h2>
                        <h3 class="text-4xl font-bold text-gray-900 mt-2 ">
                            {{ t('What we do') }}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-between items-start w-full mt-10">
                <!-- left border 2nd row-->
                <div class="w-4 xl:w-6 mr-8 xl:mr-22 h-full bg-gray-50 flex-shrink-0"></div>

                <!-- Left main section 2nd row-->
                <div class="w-full lg:max-w-[700px]">
                    <div class=" flex flex-col">

                        <!-- Description + Button -->
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
                            <p class="text-gray-700 text-lg max-w-md">
                                {{ t('Read about our expertise and latest projects and see how we can help you.') }}
                            </p>
                            <a href="{{ url('/we-do') }}"
                                class="bg-black text-white px-6 py-3 rounded-full text-center font-semibold hover-effect w-40  min-w-40 uppercase">
                                {{ t('Visit page') }}
                            </a>
                        </div>

                        <!-- Options -->
                        <div class="grid grid-flow-row md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4">
                            @foreach ($options as $option)
                                <a href="{{ url($option['url']) }}"
                                    class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-4 rounded-2xl text-base font-semibold transition">
                                    {{ $option['label'] }}
                                    <svg clip-rule="evenodd" fill-rule="evenodd" width="23" height="23"
                                        class="float-right mt-8 -ml-5" stroke-linejoin="round" stroke-miterlimit="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12.007 2c-5.518 0-9.998 4.48-9.998 9.998 0 5.517 4.48 9.997 9.998 9.997s9.998-4.48 9.998-9.997c0-5.518-4.48-9.998-9.998-9.998zm1.523 6.21s1.502 1.505 3.255 3.259c.147.147.22.339.22.531s-.073.383-.22.53c-1.753 1.754-3.254 3.258-3.254 3.258-.145.145-.335.217-.526.217-.192-.001-.384-.074-.531-.221-.292-.293-.294-.766-.003-1.057l1.977-1.977h-6.693c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h6.693l-1.978-1.979c-.29-.289-.287-.762.006-1.054.147-.147.339-.221.53-.222.19 0 .38.071.524.215z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row lg:w-1/3 min-w-[26rem] justify-between xl3-w-24  ">
            <!-- Right Column: Image -->
            <div class="float-left lg:-ml-24  xl3-max-500 ">
                <img src="{{ asset('images/wedo1.jpg') }}" alt="Our Work" class="w-full  lg:h-[580px] object-cover ">
            </div>

        </div>
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
