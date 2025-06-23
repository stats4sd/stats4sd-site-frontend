@extends('layouts.app')
@section('content')

    <div class="relative">
        <div class="overflow-hidden h-96">
            <img 
                src="{{ asset('images/front-page.webp') }}" 
                alt="Team Page" 
                class="w-full h-full object-cover object-top"
            >
        </div>

        <div class="absolute inset-0 flex items-center justify-start text-white px-8">
            <div class="max-w-xl">
                <div class="text-5xl font-bold mb-2">
                    {{ t("Team") }}
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="team-container">
            @foreach($teamData as $teamMember)
                <div class="relative" x-data="{ open: false }">
                    <!-- Card -->
                    <div class="relative group cursor-pointer" @click="open = true">
                        <div 
                            class="h-80 bg-cover bg-center shadow-lg transition duration-300 group-hover:brightness-75 overflow-hidden"
                            style="background-image: url('{{ asset($teamMember['avatar']) }}')"
                        >
                            <div class="absolute bottom-0 left-0 right-0 bg-[rgba(0,0,0,0.6)] group-hover:bg-opacity-50 transition duration-300 p-4">
                                <h4 class="text-white text-lg font-semibold mb-1">{{ $teamMember['name'] }}</h4>
                                <p class="text-white text-sm">{{ $teamMember['title'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div
                        x-show="open"
                        x-cloak
                        class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.9)]"
                    >
                        <div @click.away="open = false" class="bg-white shadow-xl max-w-4xl w-full mx-4 p-6 relative overflow-y-auto max-h-[90vh]">

                            <!-- Header -->
                            <div class="text-left mb-4">
                                <h2 class="text-2xl font-bold">{{ $teamMember['name'] }}</h2>
                                <p class="text-gray-600">{{ $teamMember['title'] }}</p>
                                <div class="border-b font-bold mt-2"></div>
                            </div>

                            <!-- Body -->
                            <div class="flex flex-col md:flex-row gap-6 mt-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset($teamMember['avatar']) }}" alt="{{ $teamMember['name'] }}" class="w-64 h-auto rounded-md object-cover">
                                </div>
                                <div class="flex-1 flex flex-col justify-between">
                                    <p class="text-gray-800 text-base leading-relaxed">
                                        {{ $teamMember['long_description'] }}
                                    </p>
                                    <div class="flex justify-end gap-4 mt-6">
                                        <a href="mailto:{{ $teamMember['email'] }}" class="bg-stats4sd-red text-white font-semibold py-2 px-4 rounded-full flex items-center">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                            </svg>
                                            <span class="ml-2">{{ t("Email") }}</span>
                                        </a>

                                        <a href="https://www.linkedin.com/in/{{ $teamMember['linkedin'] }}"
                                            target="_blank"
                                            class="bg-stats4sd-red text-white font-semibold py-2 px-4 rounded-full flex items-center">
                                            <img src="{{ asset('images/linkedin_logo.png') }}" alt="LinkedIn" class="w-4 h-4 mr-2">
                                            {{ t("LinkedIn") }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection


