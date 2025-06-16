@extends('layouts.app')

@section('content')

@component('components.level-2-cards', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'E-learning page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("E-learning"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'options' => [
            [
                'title' => 'Courses',
                'url' => url('/we-do/e-learning/courses'),
                'cover_photo_url' => asset('images/we-do.jpg'),
                'description' => 'Stats4SD provides taught courses and self-learning courses online.',
            ],
            [
                'title' => 'Videos and video playlists',
                'url' => url('/we-do/e-learning/videos'),
                'cover_photo_url' => asset('images/we-do.jpg'),
                'description' => 'Our educational videos explore topics ranging from data collection and statistical analysis to agroecology and farmer research.',
            ],
            [
                'title' => 'Webinars',
                'url' => url('/we-do/e-learning/webinars'),
                'cover_photo_url' => asset('images/we-do.jpg'),
                'description' => 'Our research methods webinars provide the opportunity for discussion and sharing of knowledge and experiences.',
            ],
            [
                'title' => 'Blogs',
                'url' => url('/we-do/e-learning/blogs'),
                'cover_photo_url' => asset('images/we-do.jpg'),
                'description' => 'Search our library of resources, browse our collections and link to other resource hubs.',
            ],
            [
                'title' => 'Resources library',
                'url' => url('/we-do/e-learning/resources-library'),
                'cover_photo_url' => asset('images/we-do.jpg'),
                'description' => 'Search our library of resources, browse our collections and link to other resource hubs.',
            ]
            ]
        ])
    @endcomponent

@endsection
