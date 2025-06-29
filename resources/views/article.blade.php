@extends('layouts.app')
@section('content')
    <!-- Header section -->
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0 mx-auto">
            <div class="text-6xl font-bold pt-2">
                {{ t('Blog') }}
            </div>
        </div>
    </div>
    
    <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-16 2xl:px-2  mx-auto">
            <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="flex space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}" class="hover:underline">{{ t('Blog') }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        {{ t('Blog Post') }}
                    </li>
                </ol>
            </nav>
    </div>

    <!-- BLog Post -->
    <div class="container py-16 max-w-screen-lg mx-auto">

        <!-- Category & Date -->
        <div class="flex items-center space-x-4 text-sm text-gray-600">
            <span class="bg-stats4sd-red text-white px-3 py-1 rounded-full">{{ $article->category->name }}</span>
            <span class="post-meta">{{ $article->readable_date ?? $article->created_at->format('F j, Y') }}</span>
        </div>

        <!-- Title -->
        <h2 class="mt-4 py-3 text-3xl font-bold">{{ $article->title }}</h2>

        <!-- Tags -->
        @if($article->tags->count())
            <ul class="flex flex-wrap gap-2 mb-4">
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