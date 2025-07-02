@extends('layouts.app')
@section('content')
    <!-- Header section -->

    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-14 2xl:px-3 mt-32 mx-auto">
        <div class="bg-stats4sd-red h-3 w-28 mb-2"></div>
        <div class="text-6xl font-bold pt-2">
            {{ t('Blog') }}
        </div>
    </div>

    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4 mx-auto">

        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:text-stats4sd-red ">{{ t('Home') }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    {{ t('Blog') }}
                </li>
            </ol>
        </nav>
    </div>

    <div class="py-16 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0 mx-auto">

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 py-4">
            @foreach($blogs as $blog)
                <a href="{{ url('/blog/' . $blog->slug) }}" class="shadow-xl overflow-hidden flex flex-col hover-effect">
                    <!-- Placeholder Image -->
                    <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/resources.webp') }}');"></div>

                    <!-- Category & Title -->
                    <div class="bg-white p-6 flex flex-col justify-between">
                        <div class="flex flex-col justify-start">
                            <p class="text-stats4sd-red font-semibold">{{ $blog->category->name }}</p>
                            <h2 class="font-bold text-lg uppercase mb-1">{{ $blog->title }}</h2>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- Pagination -->
            @if ($blogs->hasPages())
                <div class="mt-12 flex justify-center">
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-2">
                        {{-- Previous Page Link --}}
                        @if ($blogs->onFirstPage())
                            <span class="px-4 py-2 text-gray-400 border rounded cursor-not-allowed">&laquo;</span>
                        @else
                            <a href="{{ $blogs->previousPageUrl() }}" class="px-4 py-2 text-black border rounded hover:bg-gray-100">&laquo;</a>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            @if ($page == $blogs->currentPage())
                                <span class="px-4 py-2 bg-black text-white border rounded">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-4 py-2 text-black border rounded hover:bg-gray-100">{{ $page }}</a>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($blogs->hasMorePages())
                            <a href="{{ $blogs->nextPageUrl() }}" class="px-4 py-2 text-black border rounded hover:bg-gray-100">&raquo;</a>
                        @else
                            <span class="px-4 py-2 text-gray-400 border rounded cursor-not-allowed">&raquo;</span>
                        @endif
                    </nav>
                </div>
            @endif

        </div>

    </div>

@endsection