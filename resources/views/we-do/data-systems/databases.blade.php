@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Databases and platforms page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Databases and platforms"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'content' => '
        ',
        'caseStudy' => [

        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection