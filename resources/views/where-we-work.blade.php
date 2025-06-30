@extends('layouts.app')
@section('content')
    <!-- Header section -->

    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
            <div class="text-3xl font-bold uppercase text-stats4sd-red ">
                {{ t('Our global impact') }}
            </div>

            <div class="text-6xl font-bold pt-2">
                {{ t('Where we work') }}
            </div>
        </div>
    </div>
    <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-16 2xl:px-2  mx-auto">


        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    {{ t('Where we work') }}
                </li>
            </ol>
        </nav>

    </div>
    </div>

    <section class="bg-white pt-4 pb-16 px-6 md:px-20">
        <div class="max-w-4xl mx-auto space-y-6 text-gray-800">
            <img src="{{ asset('images/stats4sd-map.png') }}" alt="Map of where we work"
                class="w-full h-auto rounded shadow">
        </div>
    </section>
@endsection
