@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Data collection and management systems page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Data collection and management systems"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'content' => '
        ',

        'additionalContent' => '',
    ])
    @endcomponent

@endsection