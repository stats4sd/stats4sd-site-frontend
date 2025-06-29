@extends('layouts.app')

@section('content')

@component('components.level-2-cards', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Data systems and platforms page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Data systems and platforms"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'options' => [
            [
                'title' => 'Data collection and management systems',
                'url' => url('/we-do/data-systems/collection-management-systems'),
                'cover_photo_url' => asset('images/wedo/de/datacoll.jpg'),
                'description' => 'We provide clients with end-to-end data collection and management systems and support the teams that collect the data.',
            ],
            [
                'title' => 'Databases and platforms',
                'url' => url('/we-do/data-systems/databases'),
                'cover_photo_url' => asset('images/wedo/de/databasesm.jpg'),
                'description' => 'We build databases and user-friendly online platforms for our clients.',
            ],
            [
                'title' => 'Dashboards',
                'url' => url('/we-do/data-systems/dashboards'),
                'cover_photo_url' => asset('images/wedo/de/dashboard.jpg'),
                'description' => 'We build dashboards for managing data collection processes and for presenting results.',
            ],
        ]
        ])
    @endcomponent

@endsection