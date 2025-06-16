@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Research ethics and responsible data handling page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Research ethics and responsible data handling"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '',
        'caseStudy' => [
            'title' => '',
            'description' => '',
            'image' => 'images/about.webp',
            'imageAlt' => 'Case Study Image',
        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection