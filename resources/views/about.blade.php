@extends('layouts.app')
@section('content')

    <div class="relative">
        <div class="overflow-hidden h-96">
            <img 
                src="{{ asset('images/front-page.webp') }}" 
                alt="About Page" 
                class="w-full h-full object-cover object-top"
            >
        </div>

        <div class="absolute inset-0 flex items-center justify-start text-white px-8">
            <div class="max-w-xl">
                <div class="text-5xl font-bold mb-2">
                    {{ t("About us") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs -->
    <nav class="pt-12 text-sm text-gray-600 mb-6 px-6 md:px-20" aria-label="Breadcrumb">
        <ol class="list-reset flex space-x-2">
            <li>
                <a href="{{ url('/home') }}" class="hover:underline">{{ t("Home") }}</a>
            </li>
            <li>
                <span>&gt;</span>
            </li>
            <li>
                {{ t("About us") }}
            </li>
        </ol>
    </nav>

    <!-- Who we are -->
    <section class="w-full flex flex-col lg:flex-row">
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("Who we are") }}</h2>
                <p class="text-gray-700">{{ t("Stats4SD is a not-for-profit, social enterprise established in May 2016. We promote better use of statistical methods for decision
                    making to benefit society and the environment.") }}
                </p>
                <p class="text-gray-700">{{ t("Stats4SD was founded in 2016 by a group of applied statisticians from the University of Reading with a mission to use their skills
                    for the benefit of society and the environment.") }}
            </div>
        </div>
    <!-- Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-72">
            <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="w-full h-full">
        </div>
    </div>
    </section>

    <!-- What we do -->
    <section class="w-full flex flex-col lg:flex-row bg-gray-100 ">
    <!-- Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-72">
            <img src="{{ asset('images/we-do.jpg') }}" alt="What we do image" class="w-full h-full">
        </div>
    </div>
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("What we do") }}</h2>
                <p class="text-gray-700">{{ t("We are a not-for-profit, social enterprise providing:") }}
                    <ul class="text-gray-700 list-disc list-inside">
                    <li>{{ t("Statistical and data management expertise") }}</li>
                    <li>{{ t("Support on research designs and methodology") }}</li>
                    <li>{{ t("Technical guidance related to collection and processing of data and information") }}</li>
                    </ul>
                </p>
                <p class="text-gray-700">{{ t("We work with teams across the world, providing our services to a global community of people working
                    towards the UN Sustainable Developmemt Goals.") }}
                </p>
                <!-- Button -->
                <div class="mt-auto pt-8 mb-6 text-center">
                    <a href="{{ url('/we-do') }}">
                        <span class="inline-block bg-stats4sd-red text-white uppercase px-4 py-2 rounded-3xl font-semibold text-sm">
                            {{ t("Find Out More") }}
                        </span>
                    </a>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Principles -->
    <section class="w-full flex flex-col lg:flex-row">
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("Principles") }}</h2>
                <p class="text-gray-700">{{ t("Our key values are summarised in our Principles Document, which highlights how we wish to operate. These values guide our conduct
                    as a not-for-profit social enterprise, committed to supporting sustainable development, and are the basis for our efforts towards achieving our goal of 
                    'promoting better use of statistical methods for decision-making to benefit society and the environment'.") }}
                </p>
                <!-- Button -->
                <div class="mt-auto pt-8 mb-6 text-center">
                    <a href="#">
                        <span class="inline-block bg-stats4sd-red text-white uppercase px-4 py-2 rounded-3xl font-semibold text-sm">
                            {{ t("Download Principles Document") }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    <!-- Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-72">
            <img src="{{ asset('images/team.jpg') }}" alt="Principles image" class="w-full h-full">
        </div>
    </div>
    </section>

@endsection
