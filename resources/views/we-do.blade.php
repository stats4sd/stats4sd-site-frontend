@extends('layouts.app')
@section('content')
    <!-- Header section -->
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
            <div class="text-3xl font-bold uppercase text-stats4sd-red ">
                {{ t('Our work') }}
            </div>

            <div class="text-6xl font-bold pt-2">
                {{ t('What we do') }}
            </div>
        </div>
    </div>
    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4  mx-auto">

        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    {{ t('What we do') }}
                </li>
            </ol>
        </nav>
    </div>




    @php
        $cards = [
            [
                'title' => t('Sustainable development'),
                'url' => url('/we-do/sustainable-devlopment'),
                'bg' => asset('images/we-do.jpg'),
            ],
            [
                'title' => t('Research methods and analysis'),
                'url' => url('/we-do/research-methods'),
                'bg' => asset('images/team.jpg'),
            ],
            [
                'title' => t('Agriculture and food systems'),
                'url' => url('/we-do/food-systems'),
                'bg' => asset('images/about.webp'),
            ],
            [
                'title' => t('Data systems and platforms'),
                'url' => url('/we-do/data-systems'),
                'bg' => asset('images/about.webp'),
            ],
            [
                'title' => t('M&E and impact assessment'),
                'url' => url('/we-do/m-and-e'),
                'bg' => asset('images/we-do.jpg'),
            ],
            [
                'title' => t('E-learning'),
                'url' => url('/we-do/e-learning'),
                'bg' => asset('images/team.jpg'),
            ],
        ];
    @endphp

    <section
        class="bg-white pt-8 pb-24 px-6 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4  mx-auto">
        <div class=" grid grid-cols-1 lg:grid-cols-12 gap-8  items-start mb-16">

            <!-- Left Side: Intro Text (4 columns on md+) -->
            <div
                class="md:col-span-8 lg:col-span-4 space-y-6 text-gray-800 w-full md:flex md:flex-row md:gap-12 lg:gap-0 lg:flex-col ">
                <div>
                    <p class="mb-4">
                        {{ t("Stats4SD was founded in 2016 by a group of applied statisticians, data engineers and research methods experts from the University of
                                                Reading with a mission to use their skills for the benefit of society and the environment.") }}
                    </p>
                    <p>{{ t("Since then, we have led or supported around xx projects across xx countries. Our team now includes specialists in quantitative and qualitative
                                            research methods, complex data analysis and data systems and platforms.") }}
                    </p>
                </div>
                <div class="block w-full">
                    <p
                        class="bg-stats4sd-red rounded-t-4xl rounded-bl-4xl px-10 py-12 my-8 md:my-0 text-white font-semibold uppercase md:float-right w-full md:w-72">
                        {{ t('Follow the links below to learn more about the work we do for our clients and partners.') }}
                    </p>
                </div>
            </div>

            <!-- Right Side: 6 Cards (8 columns on md+) -->
            <div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6">
                @foreach ($cards as $card)
                    <a href="{{ $card['url'] }}" class="relative h-66 w-full overflow-hidden  hover-effect rounded-3xl">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center"
                            style="background-image: url('{{ $card['bg'] }}');">
                        </div>

                        <!-- Overlay -->
                        <div class="absolute bottom-0 w-full bg-[rgba(0,0,0,0.6)] text-white p-4 h-5/12">
                            <h3 class="text-lg font-semibold">{{ $card['title'] }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>
@endsection
