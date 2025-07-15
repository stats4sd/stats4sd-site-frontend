@extends('layouts.app')

@section('content')

@component('components.level-2-cards', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Agriculture and food systems page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Agriculture and food systems"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'options' => [
            [
                'title' => 'Food systems transformation',
                'url' => url('/we-do/food-systems/transformation'),
                'cover_photo_url' => asset('images/wedo/agri/food2.jpg'),
                'description' => 'We support the McKnight Foundation’s work towards a world where everyone has access to sustainably produced, nutritious food.',
            ],
            [
                'title' => 'Agroecology',
                'url' => url('/we-do/food-systems/agroecology'),
                'cover_photo_url' => asset('images/wedo/agri/agroecology.jpg'),
                'description' => 'Together with our partner organisations, we are developing innovative research methods for agroecology.',
            ],
            [
                'title' => 'Agricultural and farmer research',
                'url' => url('/we-do/food-systems/research'),
                'cover_photo_url' => asset('images/wedo/agri/farm3card.jpg'),
                'description' => 'Our team can advise on traditional agricultural research and is also actively involved in farmer research and knowledge co-creation.',
            ],
        ]
        ])
    @endcomponent

@endsection
