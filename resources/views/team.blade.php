@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl mx-auto">
            <div class="text-3xl font-bold uppercase text-stats4sd-red ">
                {{ t("Who We Are") }}
            </div>

            <div class="text-6xl font-bold pt-2">
                {{ t("Our team") }}
            </div>
        </div>
</div>
<div class="px-4 max-w-screen-lg 2xl:max-w-screen-xl mx-auto">

            <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="flex space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="{{ url('/home') }}" class="hover:underline">{{ t("Home") }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        {{ t("Our team") }}
                    </li>
                </ol>
            </nav>

            <div class="font-bold mb-6 pt-6">{{ t("Click on a team member's photo to view their bio and contact information") }}</div>
        </div>
    </div>
    
    <!-- Team Cards -->
    <div class="max-w-screen-lg 2xl:max-w-screen-xl mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 2xl:gap-12" id="team-container">
            @foreach($teamData as $teamMember)
                <div class="relative" x-data="{ open: false }">
                    <!-- Card -->
                    <div class="cursor-pointer rounded-3xl overflow-hidden shadow-lg hover-effect" @click="open = true">                        
                        <div 
                            class="h-80 bg-cover bg-center transition duration-300"
                            style="background-image: url('{{ asset($teamMember['avatar']) }}')"
                        ></div>
                    </div>
                        <div class="mt-2 px-2">
                            <h4 class="text-gray-900 text-lg font-semibold">{{ $teamMember['name'] }}</h4>
                            <p class="text-gray-700 text-sm">{{ $teamMember['title'] }}</p>
                        </div>

                    <!-- Modal -->
                    <div
                        x-show="open"
                        x-cloak
                        class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.9)]"
                    >
                        <div @click.away="open = false" class="bg-white shadow-xl max-w-6xl w-full mx-4 p-6 relative overflow-y-auto max-h-[90vh]">

                            <!-- Modal Content -->
                            <div class="flex flex-col md:flex-row gap-6">

                                <!-- Photo -->
                                <div class="flex-shrink-0 h-full">
                                    <img src="{{ asset($teamMember['avatar']) }}" 
                                        alt="{{ $teamMember['name'] }}" 
                                        class="h-full w-64 object-cover rounded-none">
                                </div>

                                <!-- Name, Title, Description -->
                                <div class="flex-1 flex flex-col justify-start">
                                    <h2 class="text-3xl font-bold">{{ $teamMember['name'] }}</h2>
                                    <p class="text-stats4sd-red uppercase text-2xl font-bold mt-1">
                                        {{ $teamMember['title'] }}
                                    </p>
                                    <p class="text-sm mt-4">
                                        {{ $teamMember['long_description'] }}
                                    </p>
                                </div>

                                <!-- Contact -->
                                <div class="flex flex-col justify-start mt-[4.5rem]">
                                    <span class="text-lg font-bold mb-4">{{ t('Contact') }}</span>

                                    <!-- Email -->
                                    <div class="mb-4">
                                        <span class="font-bold block">Email</span>
                                        <a href="mailto:{{ $teamMember['email'] }}" class="text-stats4sd-red break-words">
                                            {{ $teamMember['email'] }}
                                        </a>
                                    </div>

                                    @if(!empty($teamMember['linkedin']))
                                    <div class="mb-4">
                                        <span class="font-bold block">LinkedIn</span>
                                        <a href="{{ $teamMember['linkedin'] }}" 
                                           target="_blank" 
                                           class="text-stats4sd-red break-words">
                                            {{ $teamMember['linkedin'] }}
                                        </a>
                                    </div>
                                    @endif

                                    @if(!empty($teamMember['github']))
                                    <div class="mb-4">
                                        <span class="font-bold block">GitHub</span>
                                        <a href="{{ $teamMember['github'] }}" 
                                           target="_blank" 
                                           class="text-stats4sd-red break-words">
                                            {{ $teamMember['github'] }}
                                        </a>
                                    </div>
                                    @endif

                                    @if(!empty($teamMember['google_scholar']))
                                    <div>
                                        <span class="font-bold block">Google Scholar</span>
                                        <a href="{{ $teamMember['google_scholar'] }}" 
                                           target="_blank" 
                                           class="text-stats4sd-red break-words">
                                            {{ $teamMember['google_scholar'] }}
                                        </a>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Organisational Diagram Section -->
    <div class="bg-gray-100 py-12 mt-12">
        <div class="max-w-4xl mx-auto px-4 text-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Organisation Diagram</h2>
            <p class="text-lg text-gray-700 mb-8">
                Download the organisation diagram to see the staff and management structure at Stats4SD.
            </p>
            <a href="#" 
                class="inline-block bg-black text-white px-6 py-3 text-lg font-semibold rounded hover:bg-gray-800 transition"
                target="_blank">
                    DOWNLOAD PDF
            </a>
        </div>
    </div>


@endsection
