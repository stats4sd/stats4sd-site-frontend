<!-- Header section -->
<div class="px-4 pb-12 pt-20 max-w-screen-xl mx-auto">
    <div class="max-w-xl">
        <div class="text-3xl font-bold uppercase text-stats4sd-red pt-12">
            {{ $headerSubtitle }}
        </div>

        <div class="text-5xl font-bold pt-2 mb-4">
            {{ $headerTitle }}
        </div>

        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t("Home") }}</a>
                </li>
                <li><span>&gt;</span></li>
                <li>
                    <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">{{ $level1Breadcrumb }}</a>
                </li>
                <li><span>&gt;</span></li>
                <li>{{ $headerTitle }}</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Header Image and content -->
<div class="relative w-full h-64 md:h-80 lg:h-96 mb-64">
    <img 
        src="{{ asset($headerImage) }}" 
        alt="Header Image" 
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Content -->
    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-[90%] max-w-6xl bg-white px-6 md:px-12 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Lead Paragraph -->
            <div class="md:w-1/2">
                <p class="text-xl md:text-xl font-semibold">
                    {{ $lead_paragraph }}
                </p>
            </div>

            <!-- Content -->
            <div class="md:w-1/2">
                {!! $content !!}
            </div>
        </div>
    </div>
</div>

<!-- Case Study -->
@if(!empty($caseStudies) && is_array($caseStudies))
    @foreach($caseStudies as $index => $caseStudy)
        <section class="w-full flex flex-col lg:flex-row {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
        <!-- Image -->
        <div class="w-full lg:w-2/5 h-80 lg:h-auto">
            <img src="{{ asset($caseStudy['image']) }}" alt="{{ $caseStudy['imageAlt'] }}" class="w-full h-full object-cover">
        </div>

        <!-- Text -->
        <div class="w-full lg:w-3/5 bg-stats4sd-lightgrey p-10 flex items-center">
            <div class="max-w-2xl">
                <div class="text-stats4sd-red uppercase font-bold tracking-wide text-xl mb-2">
                    {{ t("Our Work") }}
                </div>
                <h2 class="text-2xl font-bold mb-4">
                    {{ $caseStudy['title'] }}
                </h2>
                <p>
                    {!! $caseStudy['description'] !!}
                </p>
            </div>
        </div>
    </section>
    @endforeach
@endif

<section class="bg-white py-20 px-6 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 {{ empty($additionalContent) ? 'items-center justify-center' : '' }}">
        @if(!empty($additionalContent))
            <!-- More Information -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-stats4sd-red text-2xl font-bold mb-4">
                    {{ t("More Information") }}
                </h2>
                <div class="space-y-4">
                    {!! $additionalContent !!}
                </div>
            </div>
        @endif

        <!-- Get in Touch -->
        <div class="w-full lg:w-1/2">
            <h2 class="text-stats4sd-red text-2xl font-bold mb-4">
                {{ t("Get in Touch") }}
            </h2>
            <p>
                {{ t("To learn more about how we can help you, please contact:") }}
            </p>
            
            <div class="flex flex-wrap gap-4 pt-6">
                @foreach($teamData as $teamMember)
                    <div class="w-40 cursor-pointer" x-data="{ open: false }">
                        <div @click="open = true" class="overflow-hidden rounded-xl shadow-md hover-effect">
                            <img 
                                src="{{ asset($teamMember['avatar']) }}" 
                                alt="{{ $teamMember['name'] }}"
                                class="w-full h-40 object-cover rounded-xl"
                            >
                        </div>
                        <div class="mt-2 text-left">
                            <h4 class="font-semibold leading-tight">{{ $teamMember['name'] }}</h4>
                            <p>{{ $teamMember['title'] }}</p>
                        </div>

                        <!-- Modal -->
                            <div
                                x-show="open"
                                x-cloak
                                class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.9)]"
                            >
                                <div @click.away="open = false" class="bg-white shadow-xl max-w-6xl w-full mx-4 p-6 relative overflow-y-auto max-h-[90vh]">

                                    <div class="flex flex-col md:flex-row gap-6">
                                        <div class="flex-shrink-0 h-full">
                                            <img src="{{ asset($teamMember['avatar']) }}" 
                                                alt="{{ $teamMember['name'] }}" 
                                                class="h-full w-64 object-cover rounded-xl">
                                        </div>

                                        <div class="flex-1 flex flex-col justify-start">
                                            <h2 class="text-3xl font-bold">{{ $teamMember['name'] }}</h2>
                                            <p class="text-stats4sd-red uppercase text-2xl font-bold mt-1">
                                                {{ $teamMember['title'] }}
                                            </p>
                                            <p class="text-sm mt-4">
                                                {{ $teamMember['long_description'] }}
                                            </p>
                                        </div>

                                        <div class="flex flex-col justify-start mt-[4.5rem]">
                                            <span class="text-lg font-bold mb-4">{{ t('Contact') }}</span>

                                            <div class="mb-4">
                                                <span class="font-bold block">Email</span>
                                                <a href="mailto:{{ $teamMember['email'] }}" class="text-stats4sd-red break-words">
                                                    {{ $teamMember['email'] }}
                                                </a>
                                            </div>

                                            @if(!empty($teamMember['linkedin']))
                                            <div class="mb-4">
                                                <span class="font-bold block">LinkedIn</span>
                                                <a href="{{ $teamMember['linkedin'] }}" target="_blank" class="text-stats4sd-red break-words">
                                                    {{ $teamMember['linkedin'] }}
                                                </a>
                                            </div>
                                            @endif

                                            @if(!empty($teamMember['github']))
                                            <div class="mb-4">
                                                <span class="font-bold block">GitHub</span>
                                                <a href="{{ $teamMember['github'] }}" target="_blank" class="text-stats4sd-red break-words">
                                                    {{ $teamMember['github'] }}
                                                </a>
                                            </div>
                                            @endif

                                            @if(!empty($teamMember['google_scholar']))
                                            <div>
                                                <span class="font-bold block">Google Scholar</span>
                                                <a href="{{ $teamMember['google_scholar'] }}" target="_blank" class="text-stats4sd-red break-words">
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
    </div>
</section>