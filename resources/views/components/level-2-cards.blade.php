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
            <div class="text-2xl mb-2 uppercase">
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
            {{ $headerTitle }}
        </li>
    </ol>
</nav>

@if(!empty($options) && is_array($options))
    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-wrap justify-center gap-8">
                @foreach($options as $option)
                    <a href="{{ $option['url'] }}" class="w-full max-w-[18rem] shadow-xl overflow-hidden flex flex-col hover-effect">
                        <!-- Image -->
                        <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $option['cover_photo_url'] }}');"></div>

                        <!-- Content -->
                        <div class="bg-white px-12 pt-6 pb-4 flex flex-col justify-between">
                            <div class="flex flex-col justify-start cases_heading">
                                <h2 class="font-bold text-lg mb-1">{{ $option['title'] }}</h2>
                            </div>
                            <div class="h-1 w-full bg-black mt-3 mb-6"></div>
                            <h2 class="text-lg mb-1">{{ $option['description'] }}</h2>
                        </div>

                        <!-- Button -->
                        <div class="mt-auto mb-6 text-center">
                            <span class="inline-block bg-stats4sd-red text-white uppercase px-4 py-2 rounded-3xl font-semibold text-sm">
                                {{ t("Find Out More") }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endif