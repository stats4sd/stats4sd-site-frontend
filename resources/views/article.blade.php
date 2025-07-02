@extends('layouts.app')
@section('content')

    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
            <div class="text-2xl md:text-3xl font-bold uppercase text-stats4sd-red ">
                {{ $article->category->name }}
            </div>

            <div class="text-5xl md:text-6xl font-bold pt-2">
                {{ $article->title }}
            </div>
        </div>
    </div>
    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4 mx-auto">
        <nav class="py-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600 flex-col sm:flex-row">
                <li class="hidden sm:block">
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                </li>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <a href="{{ url('/blog') }}" class="hover:underline">{{ t('Blog') }}</a>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">{{ $article->title }}</li>
            </ol>
        </nav>
    </div>

    <!-- BLog Post -->
    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4 mx-auto">

        <!-- Category & Date -->
        <div class="flex items-center space-x-4 text-sm text-gray-600">
            <span class="bg-stats4sd-red text-white px-3 py-1 rounded-full">Author name</span>
            <span class="post-meta">{{ $article->readable_date ?? $article->created_at->format('F j, Y') }}</span>
        </div>

        <!-- Tags -->
        @if($article->tags->count())
            <ul class="flex flex-wrap gap-2 pt-4 mb-4">
                @foreach($article->tags as $tag)
                    <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endif

        <!-- Content -->
        <div class="prose max-w-none">
            {!! $article->content !!}
        </div>

    </div>

@endsection