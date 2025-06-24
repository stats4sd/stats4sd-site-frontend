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
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    <a href="{{ $level1BreadcrumbUrl }}" class="hover:underline">{{ $level1Breadcrumb }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    {{ $headerTitle }}
                </li>
            </ol>
        </nav>

    </div>
</div>

@if(!empty($options) && is_array($options))
    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-wrap justify-center gap-6">
                @foreach($options as $option)
                    <a href="{{ $option['url'] }}" class="relative h-96 w-[calc(25%-1.5rem)] min-w-[240px] max-w-sm overflow-hidden shadow-md hover-effect rounded-lg">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center"
                             style="background-image: url('{{ $option['cover_photo_url'] }}');">
                        </div>

                        <!-- Bottom Half Overlay -->
                        <div class="absolute bottom-0 h-1/2 w-full bg-[rgba(0,0,0,0.6)] text-white p-4 flex flex-col justify-center">
                            <h3 class="text-lg font-semibold">{{ $option['title'] }}</h3>
                            <p class="text-sm mt-1">{{ $option['description'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endif