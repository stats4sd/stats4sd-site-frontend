@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-20   mx-auto">
            <div class="text-3xl font-bold uppercase text-stats4sd-red ">
                {{ t("Who We Are") }}
            </div>

            <div class="text-6xl font-bold pt-2">
                {{ t("Our team") }}
            </div>
        </div>
</div>
<div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-24  mx-auto">

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

            <div class="font-semibold mb-6 pt-6 text-lg">{{ t("Click on a team member's photo to view their bio and contact information") }}</div>
        </div>
    </div>
    
    <!-- Team Cards -->
    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-24  mx-auto pb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 3xl:gap-12" id="team-container">
            @foreach($teamData as $teamMember)
                <div class="relative" x-data="{ open: false }">
                    <!-- Card -->
                    <div class="cursor-pointer rounded-3xl overflow-hidden hover-effect" @click="open = true">                        
                        <div 
                            class="h-80 sm:h-70 bg-cover bg-center transition duration-300"
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
                        <div @click.away="open = false" class="bg-white shadow-xl max-w-6xl w-full mx-12 sm:mx-28 md:mx-12 relative overflow-y-auto max-h-[90vh]">

                            <!-- Modal Content -->
                            <div class="flex flex-col md:flex-row gap-6">

                                <!-- Photo -->
                                <div class="md:flex-shrink-0 md:min-h-full h-[50vh] md:h-auto overflow-hidden  w-full md:w-90">
                                    <img src="{{ asset($teamMember['avatar']) }}" 
                                        alt="{{ $teamMember['name'] }}" 
                                        class="object-cover min-h-full  rounded-none">
                                </div>

                                <!-- Name, Title, Description & contact -->
                                <div class="flex flex-col w-full md:py-12">
                                    <!-- Name & Title with red border -->
                                    <div>
                                        <div class="flex-1 flex flex-col  border-r-12 border-stats4sd-red ml-8 pr-8">
                                            <h2 class="text-3xl font-bold">{{ $teamMember['name'] }}</h2>
                                            <p class="text-stats4sd-red uppercase text-xl font-semibold mt-1">
                                                {{ $teamMember['title'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- description and contact -->
                                    <div class="flex flex-col xl:flex-row gap-12 items-start mx-8 mt-8">
                                        <!-- description -->
                                        <div class="flex-initial xl:w-7/12">
                                            <p class="text-sm " >
                                                {{ $teamMember['long_description'] }}
                                            </p>
                                        </div>

                                        <!-- Contact -->
                                        <div class="xl:w-5/12 flex flex-col text-sm">
                                            <div class="h-2 w-12 bg-stats4sd-red mb-3 xl:hidden"></div>
                                            <span class="text-lg font-bold mb-4">{{ t('Contact') }}</span>

                                            <!-- Email -->
                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" class="flex-shrink-0"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">Email</span>
                                                    <a href="mailto:{{ $teamMember['email'] }}" class="text-stats4sd-red break-words">
                                                        {{ $teamMember['email'] }}
                                                    </a>
                                                </div>
                                            </div>

                                            @if(!empty($teamMember['linkedin']))
                                                <div class="mb-3 flex flex-row items-center">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                                    <div class="ml-6">
                                                    <span class="font-semibold block">LinkedIn</span>
                                                    <a href="{{ $teamMember['linkedin'] }}" 
                                                    target="_blank" 
                                                    class="text-stats4sd-red break-words">
                                                        View profile
                                                    </a>
                                                </div>
                                            </div>
                                            @endif

                                            @if(!empty($teamMember['github']))
                                                <div class="mb-3 flex flex-row items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                                    <div class="ml-6">
                                                    <span class="font-semibold block">GitHub</span>
                                                    <a href="{{ $teamMember['github'] }}" 
                                                    target="_blank" 
                                                    class="text-stats4sd-red break-words">
                                                        View profile
                                                    </a>
                                                </div>
                                            </div>
                                            @endif

                                            @if(!empty($teamMember['google_scholar']))
                                                <div class="mb-3 flex flex-row items-center">
                                                   <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M390.9 298.5c0 0 0 .1 .1 .1c9.2 19.4 14.4 41.1 14.4 64C405.3 445.1 338.5 512 256 512s-149.3-66.9-149.3-149.3c0-22.9 5.2-44.6 14.4-64h0c1.7-3.6 3.6-7.2 5.6-10.7c4.4-7.6 9.4-14.7 15-21.3c27.4-32.6 68.5-53.3 114.4-53.3c33.6 0 64.6 11.1 89.6 29.9c9.1 6.9 17.4 14.7 24.8 23.5c5.6 6.6 10.6 13.8 15 21.3c2 3.4 3.8 7 5.5 10.5zm26.4-18.8c-30.1-58.4-91-98.4-161.3-98.4s-131.2 40-161.3 98.4L0 202.7 256 0 512 202.7l-94.7 77.1z"/></svg>
                                                    <div class="ml-6">
                                                        <span class="font-semibold block">Google Scholar</span>
                                                        <a href="{{ $teamMember['google_scholar'] }}" 
                                                        target="_blank" 
                                                        class="text-stats4sd-red break-words">
                                                            View profile
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Organisational Diagram Section -->
    <div class="bg-gray-100 pt-12 pb-28 mt-12">
        <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-24  mx-auto text-left">
        <div class="h-3 w-16 bg-stats4sd-red mb-3"></div>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Organisation Diagram</h2>
            <p class="text-base text-gray-700 mb-8">
                Download the organisation diagram to see the staff and management structure at Stats4SD.
            </p>
            <a href="#" 
                class="inline-block bg-black text-white px-6 py-2 !text-base font-semibold rounded-full hover-effect"
                target="_blank">
                    DOWNLOAD PDF
            </a>
        </div>
    </div>


@endsection
