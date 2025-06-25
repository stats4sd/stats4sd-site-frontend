@extends('layouts.app')
@section('content')

<div class="bg-white pt-20 pb-12 xl:pl-28 md:px-12 max-width-3xl">

    <!-- Title -->
    <h1 class="text-6xl font-bold text-stats4sd-red mb-10 mt-12 ml-10 md:ml-0"> Stats4SD </h1>

    <!-- Image + Red Text Block -->
    <div class="flex flex-col md:flex-row md:h-96 overflow-hidden">

        <!-- Left: Image -->
        <div class="md:w-3/4 w-full h-96">
            <img src="{{ asset('images/front-page.webp') }}" alt="Home Page" class="w-full h-full object-cover object-top">
        </div>

        

        <!-- Right: Red Block -->
        <div class="md:w-1/4 md:min-w-92 w-full bg-stats4sd-red md:ml-4 relative flex flex-col items-start justify-end p-10">
            <div class="bg-white w-24 h-2"></div>
            <p class="text-white text-xl font-semibold pt-4">
                {{ t("Improving research designs, data efficiency and information for decision-making") }}
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

    <div class="bg-white px-8 py-16 max-w-screen-xl mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Left Column -->
            <div>
                <!-- Titles -->
                <h2 class="text-stats4sd-red text-xl font-bold uppercase">
                    {{ t('Our work') }}
                </h2>
                <h3 class="text-4xl font-bold text-gray-900 mt-2 mb-4">
                    {{ t('What we do') }}
                </h3>

                <!-- Description + Button -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
                    <p class="text-gray-700 text-lg max-w-md">
                        {{ t('Read about our expertise and latest projects and see how we can help you.') }}
                    </p>
                    <a href="{{ url('/we-do') }}" class="bg-black text-white px-6 py-3 rounded-3xl font-semibold hover-effect uppercase">
                        {{ t('Visit page') }}
                    </a>
                </div>

                <!-- Options -->
                <div class="flex flex-wrap gap-3">
                    @foreach($options as $option)
                        <a 
                            href="{{ url($option['url']) }}" 
                            class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-full text-sm font-semibold transition"
                        >
                            {{ $option['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Right Column: Image -->
            <div>
                <img 
                    src="{{ asset('images/about.webp') }}" 
                    alt="Our Work" 
                    class="w-full h-auto shadow-md object-cover"
                >
            </div>
        </div>
    </div>


    <div class="bg-stats4sd-lightgrey py-16 px-4">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

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

            <div class="grid grid-cols-3 gap-4">
                @foreach ($teamMembers as $name => $ext)
                    <div>
                        <img 
                            src="{{ asset("images/team/$name.$ext") }}" 
                            alt="{{ $name }}" 
                            class="object-cover w-full h-48 md:h-56 lg:h-60"
                        >
                    </div>
                @endforeach
            </div>

            <!-- Right: Text and Button -->
            <div class="flex flex-col justify-center">
                <div class="text-stats4sd-red text-xl font-bold uppercase mb-2">
                    {{ t('Who we are') }}
                </div>
                <div class="text-4xl font-bold mb-4">
                    {{ t('Our team') }}
                </div>
                <p class="mb-6 text-gray-700">
                    {{ t('Meet the Stats4SD team and find the right specialist for your needs.') }}
                </p>
                
                <div class="w-auto">
                    <a 
                        href="{{ url('/team') }}" 
                        class="inline-block bg-black text-white px-6 py-3 font-semibold rounded-3xl hover-effect uppercase"
                    >
                        {{ t('Visit page') }}
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white py-16 px-4">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

        <!-- Left half: Our Work -->
        <div class="flex flex-col">
            <div class="text-stats4sd-red text-xl font-bold uppercase mb-4">
                {{ t('Our work') }}
            </div>
            <img src="{{ asset('images/team.jpg') }}" alt="{{ t('Our work') }}" class="mb-6 w-full max-w-md object-cover rounded" />
            <div class="font-bold text-4xl mb-2">{{ t('Where we work') }}</div>
            <p class="text-gray-700 mb-6 max-w-md">
                {{ t('Use our interactive map to see where we work around the world and the projects we support.') }}
            </p>
            <div class="flex justify-start">
                <a href="{{ url('/where-we-work') }}" 
                class="bg-black text-white px-8 py-3 rounded-3xl font-semibold uppercase hover-effect w-max"
                >
                    {{ t('Visit page') }}
                </a>
            </div>
        </div>

        <!-- Right half: About Us -->
        <div class="flex flex-col">
            <div class="text-stats4sd-red text-xl font-bold uppercase mb-4">
                {{ t('About us') }}
            </div>
            <img src="{{ asset('images/we-do.jpg') }}" alt="{{ t('About us') }}" class="mb-6 w-full max-w-md object-cover rounded" />
            <div class="font-bold text-4xl mb-2">{{ t('About us') }}</div>
            <p class="text-gray-700 mb-6 max-w-md">
                {{ t('Learn more about our philosophy, and how to contact us.') }}
            </p>
            <div class="flex justify-start">
                <a href="{{ url('/about') }}" 
                class="bg-black text-white px-8 py-3 rounded-3xl font-semibold uppercase hover-effect w-max"
                >
                    {{ t('Visit page') }}
                </a>
            </div>
        </div>

    </div>
</div>




@endsection
