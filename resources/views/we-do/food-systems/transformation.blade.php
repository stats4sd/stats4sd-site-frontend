@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Food systems transformation page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Food systems transformation"),
        'level2Breadcrumb' => t("Agriculture and food systems"),
        'level2BreadcrumbUrl' => route('we-do.food-systems'),
        'content' => '
        ',
        'caseStudy' => [

        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection