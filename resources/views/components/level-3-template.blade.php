<!-- Header section -->

<div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
    <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
        <div class="text-2xl md:text-3xl font-bold uppercase text-stats4sd-red ">
            {{ $headerSubtitle }}
        </div>

        <div class="text-5xl md:text-6xl font-bold pt-2">
            {{ $headerTitle }}
        </div>
    </div>
</div>
<div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4  mx-auto">

    <nav class="py-12 text-sm text-gray-600" aria-label="Breadcrumb">
        <ol class="flex space-x-2 text-sm text-gray-600 flex-col sm:flex-row">
            <li class="hidden sm:block">
                <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
            </li>
            <li class="hidden sm:block"><span>&gt;</span></li>
            <li class="hidden sm:block">
                <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">{{ $level1Breadcrumb }}</a>
            </li>
            <li class="block sm:hidden">
                <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">
                    < Back to {{ $level1Breadcrumb }}</a>
            </li>
            <li class="hidden sm:block"><span>&gt;</span></li>
            <li class="hidden sm:block>
                <a href="{{ $level2BreadcrumbUrl }}" class="hover:underline">{{ $level2Breadcrumb }}</a>
            </li>
            <li class="block sm:hidden">
                <a href="{{ $level2BreadcrumbUrl }}" class="hover:underline"> < Back to {{ $level2Breadcrumb }}</a>
            </li>
            <li class="hidden sm:block">{{ $headerTitle }}</li>
        </ol>
    </nav>

</div>




<!-- Header Image and content -->
<div class="w-full h-64 md:h-80 lg:h-96  ">
    <img src="{{ asset($headerImage) }}" alt="Header Image" class=" w-full h-full object-cover">
</div>
<div class="w-full mb-30 ">
    <!-- Content -->
    <div
        class=" -mt-40 mx-auto relative z-40 w-[90%] max-w-7xl bg-white px-12 lg:px-16 xl:px-20 py-12 lg:py-16 xl:py-20">
        <div class="flex flex-col md:flex-row gap-12 2xl:gap-20">
            <!-- Lead Paragraph -->
            <div class="md:w-1/2">
                <p class="text-xl md:text-xl font-semibold">
                    {{ $lead_paragraph }}
                </p>
                <div class="bg-stats4sd-red w-20 mt-16  h-3"></div>
            </div>

            <!-- Content -->
            <div class="md:w-1/2 ">
                {!! $content !!}
            </div>
        </div>
    </div>
</div>



<!-- Case Study -->
<!-- Case Study -->
@if (!empty($caseStudies) && is_array($caseStudies))
    @foreach ($caseStudies as $index => $caseStudy)
        <section class="w-full flex  flex-col lg:flex-row  {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
            <!-- Image -->
            <div class="w-full lg:w-[30%] h-80 lg:h-auto">
                <img src="{{ asset($caseStudy['image']) }}" alt="{{ $caseStudy['imageAlt'] }}"
                    class="w-full h-full object-cover">
            </div>

            <!-- Text -->
            <div
                class="flex flex-col w-full lg:w-[70%] justify-center bg-stats4sd-lightgrey py-12 xl:py-16 {{ $index % 2 !== 0 ? 'pr-12' : 'xl:pl-12' }}">
                <div class="flex flex-row justify-between {{ $index % 2 !== 0 ? 'flex-row-reverse' : '' }} h-full">

                    <div class="w-full max-w-5xl {{ $index % 2 !== 0 ? 'ml-20 ' : 'mr-20' }} ">

                        <div class=" w-full  {{ $index % 2 !== 0 ? 'mr-12 ' : 'ml-12 ' }}">
                            <div class="text-stats4sd-red uppercase font-bold tracking-wide text-xl mb-2">
                                @if (!empty($caseStudy['redtitle']))
                                    {{ $caseStudy['redtitle'] }}
                                @else
                                    {{ t('Our Work') }}
                                @endif
                            </div>
                            <h2 class="text-3xl font-bold mb-4">
                                {{ $caseStudy['title'] }}
                            </h2>

                        </div>
                    </div>
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                </div>

                <div class="flex flex-row justify-between {{ $index % 2 !== 0 ? 'flex-row-reverse' : '' }} h-full">

                    <div class="w-full max-w-5xl {{ $index % 2 !== 0 ? 'ml-20 ' : 'mr-20' }} ">

                        <div
                            class="   {{ $index % 2 !== 0 ? 'mr-12 ' : 'ml-12 ' }} md:flex md:flex-row lg:flex-col  xl:flex-row md:gap-x-12">
                            @if (!empty($caseStudy['secondcolumn']))
                                <div class="md:w-1/2 lg:w-full xl:w-1/2 py-2">
                                    {{-- Main description column --}}
                                    <p>
                                        {!! $caseStudy['description'] !!}
                                    </p>
                                </div>
                                {{-- Second column - extra info and links --}}

                                <div class="md:w-1/2 lg:w-full xl:w-1/2 py-2">
                                    {!! $caseStudy['secondcolumn'] !!}
                                </div>
                            @else
                                <div class="w-full py-2">
                                    {{-- Main description column --}}
                                    <p>
                                        {!! $caseStudy['description'] !!}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="w-4 xl:w-6  bg-none h-auto flex-shrink-0"></div>
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