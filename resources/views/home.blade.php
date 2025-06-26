@extends('layouts.app')
@section('content')
    <div class="bg-white pt-20 pb-12 xl:pl-28 md:px-12 max-w-screen-3xl mx-auto">

        <!-- Title -->
        <h1 class="text-6xl font-bold text-stats4sd-red mb-10 lg:mt-12 mt-4 ml-10 md:ml-0"> Stats4SD </h1>

        <!-- Image + Red Text Block -->
        <div class="flex flex-col md:flex-row md:h-96 2xl:min-h-[20vh] 2xl:h-auto overflow-hidden">

            <!-- Left: Image -->
            <div class="md:w-3/4 w-full h-96 2xl:min-h-[20vh] ">
                <img src="{{ asset('images/front-page.webp') }}" alt="Home Page"
                    class="w-full h-full object-cover object-center">
            </div>


            <!-- Right: Red Block -->
            <div
                class="md:w-1/4 md:min-w-92 w-full bg-stats4sd-red md:ml-4 relative flex flex-col items-start justify-end p-10">
                <div class="bg-white w-24 h-2"></div>
                <p class="text-white text-xl font-semibold pt-4">
                    {{ t('Improving research designs, data efficiency and information for decision-making') }}
                </p>
            </div>
        </div>
    </div>

    @php
        $options = [
            ['label' => 'Research methods and analysis', 'url' => '/we-do/research-methods'],
            ['label' => 'Agriculture and food systems', 'url' => '/we-do/food-systems'],
            ['label' => 'Sustainable development', 'url' => '/we-do/sustainable-devlopment'],
            ['label' => 'Data systems and platforms', 'url' => '/we-do/data-systems'],
            ['label' => 'M&E and impact assessment', 'url' => '/we-do/m-and-e'],
            ['label' => 'E-learning', 'url' => '/we-do/e-learning'],
        ];
    @endphp
    <div class=" w-full flex flex-col gap-0 md:flex-row justify-between my-12">
        <div class="flex flex-col w-2/3 xl3-w-24 my-12 pr-12 pr-36 -xl3-mr-36 ">
            <!-- Left Column top row-->
            <div class="flex flex-row justify-between items-start w-full">
                <!-- left border -->
                <div class="w-4 xl:w-6 mr-8 xl:mr-22 bg-stats4sd-red h-full flex-shrink-0"></div>

                <!-- Left main section top row-->
                <div class="w-full max-w-[700px]">
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
                <div class="w-full max-w-[700px]">
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
                        <div class="grid grid-flow-row grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4">
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
        <div class="flex flex-row w-1/3 min-w-[26rem] justify-between xl3-w-24  ">
            <!-- Right Column: Image -->
            <div class="float-left -ml-24  xl3-max-500 ">
                <img src="{{ asset('images/about.webp') }}" alt="Our Work" class="w-full h-[580px] object-cover ">
            </div>

        </div>
    </div>


    <div class="bg-stats4sd-lightgrey py-16 ">
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full">

            <!-- Left: 2 rows of 3 images -->
            @php
                $teamMembers = [
                    'Carlos' => 'jpg',
                    'AlexR' => 'jpg',
                    'Dave' => 'jpg',
                    'Sam' => 'jpg',
                    'Ric' => 'png',
                    'Jane' => 'jpg',
                ];
            @endphp
            <div>
                <div class="grid grid-cols-3 gap-4 max-w-[550px] float-right">
                    @foreach ($teamMembers as $name => $ext)
                        <div>
                            <img src="{{ asset("images/team/$name.$ext") }}" alt="{{ $name }}"
                                class="object-cover w-full h-48 md:h-56 lg:h-60">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Right: Text and Button -->
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div>
                        <div class="text-stats4sd-red text-xl font-bold uppercase mb-2">
                            {{ t('Who we are') }}
                        </div>
                        <div class="text-4xl font-bold ">
                            {{ t('Our team') }}
                        </div>
                    </div>
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                </div>
                <div class="flex flex-col justify-center mt-4">

                    <p class="mb-6 text-gray-700">
                        {{ t('Meet the Stats4SD team and find the right specialist for your needs.') }}
                    </p>
                    <div class="w-auto">
                        <a href="{{ url('/team') }}"
                            class="inline-block bg-black text-white px-6 py-3 font-semibold rounded-3xl hover-effect uppercase">
                            {{ t('Visit page') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16 ">
        <div class=" grid grid-cols-1 md:grid-cols-2 gap-x-24">

            <!-- Top row Left half: Our Work -->
            <div class="">
                <div class="flex flex-col w-[450px] float-right">
                    <div class="text-stats4sd-red text-xl font-bold uppercase mb-4">
                        {{ t('Our work') }}
                    </div>
                    <img src="{{ asset('images/team.jpg') }}" alt="{{ t('Our work') }}"
                        class="mb-6 w-full max-w-md object-cover rounded" />

                </div>
            </div>
            <!-- Top row Right half: About Us -->
            <div class="">
                <div class="flex flex-col w-[450px] float-left">
                    <div class="text-stats4sd-red text-xl font-bold uppercase mb-4">
                        {{ t('About us') }}
                    </div>
                    <img src="{{ asset('images/we-do.jpg') }}" alt="{{ t('About us') }}"
                        class="mb-6 w-full max-w-md object-cover rounded" />
                   
                    
                </div>
            </div>
            <!-- Second row Left half: Our Work -->
            <div class="flex flex-row justify-between">
                <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                <div class="w-[450px] ">
                    <div class="font-bold text-4xl mb-2">{{ t('Where we work') }}</div>
                </div>
            </div>
             <!-- Second row Right half: About Us -->
            <div class="flex flex-row justify-between">               
                <div class="w-[450px] ">
                    <div class="font-bold text-4xl mb-2">{{ t('About us') }}</div>
                </div>
                 <div class="w-4 xl:w-6 bg-stats4sd-red md:bg-white h-auto flex-shrink-0"></div>
            </div>
            <!-- Bottom row Left half: Our Work -->
            <div class="">
                <div class="flex flex-col w-[450px] float-right">
                    <p class="text-gray-700 mb-6 max-w-md md:h-12">
                        {{ t('Use our interactive map to see where we work around the world and the projects we support.') }}
                    </p>
                    <div class="flex justify-start">
                        <a href="{{ url('/where-we-work') }}"
                            class="bg-black text-white px-8 py-3 rounded-3xl font-semibold uppercase hover-effect w-max">
                            {{ t('Visit page') }}
                        </a>
                    </div>

                </div>
            </div>

            <!-- Bottom row Right half: About Us -->
            <div class="">
                <div class="flex flex-col max-w-[450px] float-left">
                   
                    <p class="text-gray-700 mb-6 max-w-md md:h-12">
                        {{ t('Learn more about our philosophy, and how to contact us.') }}
                    </p>
                    <div class="flex justify-start">
                        <a href="{{ url('/about') }}"
                            class="bg-black text-white px-8 py-3 rounded-3xl font-semibold uppercase hover-effect w-max">
                            {{ t('Visit page') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
