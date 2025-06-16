@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Resources library page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Resources library"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'content' => '
        ',
        'caseStudy' => [

        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection