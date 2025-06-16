@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Blogs page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Blogs"),
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