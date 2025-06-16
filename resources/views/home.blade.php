@extends('layouts.app')
@section('content')

    <div class="relative">
        <div class="overflow-hidden h-96">
            <img 
                src="{{ asset('images/front-page.webp') }}" 
                alt="Home Page" 
                class="w-full h-full object-cover object-top"
            >
        </div>

        <div class="absolute inset-0 flex items-center justify-start text-white px-8">
            <div class="max-w-lg">
                <div class="text-5xl font-bold mb-2">
                    Stats4SD
                </div>
                <div class="text-lg italic leading-snug">
                    {{ t("Improving research designs, data efficiency and information for decision-making") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Home Page Options -->
    @php
    $options = [
        [
            'title' => t('What we do'),
            'url' => url('/we-do'),
            'cover_photo_url' => asset('images/we-do.jpg'),
            'description' => t('Read about our expertise and latest projects and see how we can help you'),
        ],
        [
            'title' => t('Our team'),
            'url' => url('/team'),
            'cover_photo_url' => asset('images/team.jpg'),
            'description' => t('Meet the Stats4SD team and find the right specialist for your needs'),
        ],
        [
            'title' => t('Where we work'),
            'url' => url('/where-we-work'),
            'cover_photo_url' => asset('images/we-do.jpg'),
            'description' => t('Use our interactive map to see where we work around the world and the projects we support'),
        ],
        [
            'title' => t('About us'),
            'url' => url('/about'),
            'cover_photo_url' => asset('images/about.webp'),
            'description' => t('Use our interactive map to see where we work around the world and the projects we support'),
        ],
        [
            'title' => t('Resources library'),
            'url' => url('http://resources.stats4sdtest.online'),
            'cover_photo_url' => asset('images/resources.webp'),
            'description' => t('Search our library of resources including methods guidance and e-learning materials, browse our collections and link to other resource hubs'),
        ],
    ];
    @endphp

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-wrap justify-center gap-8">
                @foreach($options as $option)
                    <a href="{{ $option['url'] }}" class="w-full max-w-[20rem] shadow-xl overflow-hidden flex flex-col hover-effect">
                        <!-- Image -->
                        <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $option['cover_photo_url'] }}');"></div>

                        <!-- Content -->
                        <div class="bg-white px-12 pt-6 pb-4 flex flex-col justify-between">
                            <div class="flex flex-col justify-start cases_heading">
                                <h2 class="font-bold text-lg mb-1">{{ $option['title'] }}</h2>
                            </div>
                            <div class="h-1 w-full bg-black mt-3 mb-6"></div>
                            <h2 class="text-lg mb-1">{{ $option['description'] }}</h2>
                        </div>
                        <!-- Button -->
                        <div class="mt-auto mb-6 text-center">
                            <span class="inline-block bg-stats4sd-red text-white uppercase px-4 py-2 rounded-3xl font-semibold text-sm">
                                {{ t("Find Out More") }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
