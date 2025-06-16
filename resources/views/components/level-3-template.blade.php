<div class="relative">
    <div class="overflow-hidden h-96">
        <img 
            src="{{ asset($headerImage) }}" 
            alt="{{ $headerAlt }}" 
            class="w-full h-full object-cover object-top"
        >
    </div>

    <div class="absolute inset-0 flex items-center justify-start text-white px-8">
        <div class="max-w-lg">
            <div class="text-2xl mb-2">
                {{ $headerSubtitle }}
            </div>
            <div class="text-4xl font-bold leading-snug">
                {{ $headerTitle }}
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumbs -->
<nav class="pt-12 text-sm text-gray-600 mb-6 px-6 md:px-20" aria-label="Breadcrumb">
    <ol class="list-reset flex space-x-2">
        <li>
            <a href="{{ url('/we-do') }}" class="hover:underline">{{ t("What we do") }}</a>
        </li>
        <li>
            <span>&gt;</span>
        </li>
        <li>
            <a href="{{ $level2BreadcrumbUrl }}" class="hover:underline">{{ $level2Breadcrumb }}</a>
        </li>
        <li>
            <span>&gt;</span>
        </li>
        <li>
            {{ $headerTitle }}
        </li>
    </ol>
</nav>


<!-- Content -->
<section class="bg-white pt-4 pb-16 px-6 md:px-20">
    <div class="max-w-4xl mx-auto space-y-6 text-gray-800">
        {!! $content !!}
    </div>
</section>

<!-- Case Studies -->
@if(!empty($caseStudies) && is_array($caseStudies))
    @foreach($caseStudies as $index => $caseStudy)
        <section class="w-full flex flex-col lg:flex-row {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }}">
            <!-- Text -->
            <div class="bg-gray-100 w-full lg:w-1/2 p-10 flex items-center justify-center">
                <div class="max-w-md">
                    <h2 class="text-2xl font-bold mb-4">{{ $caseStudy['title'] }}</h2>
                    <p class="text-gray-700">{!! $caseStudy['description'] !!}</p>
                </div>
            </div>
            <!-- Image -->
            <div class="w-full lg:w-1/2 h-80 lg:h-auto">
                <img 
                    src="{{ asset($caseStudy['image']) }}" 
                    alt="{{ $caseStudy['imageAlt'] }}" 
                    class="w-full h-full object-cover"
                >
            </div>
        </section>
    @endforeach
@endif


<!-- White Section with More Text -->
@if(!empty($additionalContent))
    <section class="bg-white py-16 px-6 md:px-20">
        <div class="max-w-3xl mx-auto text-gray-800 space-y-4">
            {!! $additionalContent !!}
        </div>
    </section>
@endif

<!-- Black Border Line -->
<hr class="border-t-2 border-black my-12 mx-auto w-3/4">

<!-- Get in Touch Section -->
<section class="px-6 md:px-20 py-10">
    <h2 class="text-3xl font-bold mb-4">{{ t("Get in Touch") }}</h2>
    <p class="text-lg text-gray-700">{{ t("To learn more about how we can help you, please contact us.") }}</p>
</section>
