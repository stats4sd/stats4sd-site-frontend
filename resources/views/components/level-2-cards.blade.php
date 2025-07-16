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
            <li class="hidden sm:block">
                <span>&gt;</span>
            </li>
            <li class="hidden sm:block">
                <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">{{ $level1Breadcrumb }}</a>
            </li>
            <li class="block sm:hidden">
                <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">
                    < Back to {{ $level1Breadcrumb }}</a>
            </li>
            <li class="hidden sm:block">
                <span>&gt;</span>
            </li>
            <li class="hidden sm:block">{{ $headerTitle }}</li>
        </ol>
    </nav>
</div>


@if (!empty($options) && is_array($options))
    <div class="bg-white pt-8 pb-48 px-6 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl   mx-auto">
        <div class="mx-auto max-w-7xl px-4 md:px-0">
            <div class="flex flex-wrap justify-center 2xl:justify-start gap-6">
                @foreach ($options as $option)
                    <a href="{{ $option['url'] }}"
                       class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center"
                             style="background-image: url('{{ $option['cover_photo_url'] }}');">
                        </div>

                        <!-- Bottom Half Overlay -->
                        <div
                            class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                            <h3 class="text-lg font-semibold ">{{ $option['title'] }}</h3>
                            <p class="text-sm mt-1">{{ $option['description'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endif
