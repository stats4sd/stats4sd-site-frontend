@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <div class="px-4 pb-12 pt-20 max-w-screen-xl mx-auto">
        <div class="max-w-xl">
            <div class="text-3xl font-bold uppercase text-stats4sd-red pt-12">
                {{ t("Our work") }}
            </div>

            <div class="text-5xl font-bold pt-2 mb-4">
                {{ t("What we do") }}
            </div>

            <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="flex space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="{{ url('/home') }}" class="hover:underline">{{ t("Home") }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        {{ t("What we do") }}
                    </li>
                </ol>
            </nav>

        </div>
    </div>

    @php
        $cards = [
            [
                'title' => t("Sustainable development"),
                'url' => url('/we-do/sustainable-devlopment'),
                'bg' => asset('images/we-do.jpg'),
            ],
            [
                'title' => t("Research methods and analysis"),
                'url' => url('/we-do/research-methods'),
                'bg' => asset('images/team.jpg'),
            ],
            [
                'title' => t("Agriculture and food systems"),
                'url' => url('/we-do/food-systems'),
                'bg' => asset('images/about.webp'),
            ],
            [
                'title' => t("Data systems and platforms"),
                'url' => url('/we-do/data-systems'),
                'bg' => asset('images/about.webp'),
            ],
            [
                'title' => t("M&E and impact assessment"),
                'url' => url('/we-do/m-and-e'),
                'bg' => asset('images/we-do.jpg'),
            ],
            [
                'title' => t("E-learning"),
                'url' => url('/we-do/e-learning'),
                'bg' => asset('images/team.jpg'),
            ],
        ];
    @endphp

    <section class="bg-white pt-4 pb-16 px-6 md:px-20">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-start">

            <!-- Left Side: Intro Text (4 columns on md+) -->
            <div class="md:col-span-4 space-y-6 text-gray-800">
                <p>
                    {{ t("Stats4SD was founded in 2016 by a group of applied statisticians, data engineers and research methods experts from the University of 
                    Reading with a mission to use their skills for the benefit of society and the environment.") }}
                </p>
                <p>{{ t("Since then, we have led or supported around xx projects across xx countries. Our team now includes specialists in quantitative and qualitative 
                    research methods, complex data analysis and data systems and platforms.") }}
                </p>
                <p>
                    {{ t("Follow the links below to learn more about the work we do for our clients and partners.") }}
                </p>
            </div>

            <!-- Right Side: 6 Cards (8 columns on md+) -->
            <div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cards as $card)
                    <a href="{{ $card['url'] }}" class="relative h-60 w-full overflow-hidden shadow-md hover-effect rounded-lg">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center"
                            style="background-image: url('{{ $card['bg'] }}');">
                        </div>

                        <!-- Overlay -->
                        <div class="absolute bottom-0 w-full bg-[rgba(0,0,0,0.6)] text-white p-4">
                            <h3 class="text-lg font-semibold">{{ $card['title'] }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

@endsection