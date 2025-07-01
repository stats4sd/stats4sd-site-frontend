@extends('layouts.app')

@section('content')

@component('components.level-2-cards', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Research methods and analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Research methods and analysis"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'options' => [
            [
                'title' => 'Designing and supporting research',
                'url' => url('/we-do/research-methods/design-support'),
                'cover_photo_url' => asset('images/wedo/rm/design.jpg'),
                'description' => 'We advise on efficient research desgin and the best methods to use for each research process.',
            ],
            [
                'title' => 'Surveys',
                'url' => url('/we-do/research-methods/surveys'),
                'cover_photo_url' => asset('images/wedo/rm/surveys.jpg'),
                'description' => 'Our team advises on running surveys and provides practical support throughout the survey process.',
            ],
            [
                'title' => 'Statistical analysis',
                'url' => url('/we-do/research-methods/statistical-analysis'),
                'cover_photo_url' => asset('images/wedo/rm/statan.jpg'),
                'description' => 'Our experiences statisticians are familiar with the statistical techniques and programs you need for your data analysis.',
            ],
            [
                'title' => 'Indicators and data visualisation',
                'url' => url('/we-do/research-methods/indicators'),
                'cover_photo_url' => asset('images/wedo/rm/datavis.png'),
                'description' => 'We help you to present complex results in a clear and engaging manner for your audiences.',
            ],
            [
                'title' => 'AI for analysis',
                'url' => url('/we-do/research-methods/ai'),
                'cover_photo_url' => asset('images/wedo/rm/ai.jpg'),
                'description' => 'We are excited about new technologies and we use them in our work. We can also advise you what not to do with them.',
            ],
            [
                'title' => 'Qualitative research',
                'url' => url('/we-do/research-methods/qualitative-research'),
                'cover_photo_url' => asset('images/wedo/rm/qualsm.png'),
                'description' => 'Our qualitative methods specialists provide advice and training on qualitative data collection, analysis and report writing.',
            ],
            [
                'title' => 'Research ethics and responsible data handling',
                'url' => url('/we-do/research-methods/ethics'),
                'cover_photo_url' => asset('images/wedo/rm/ethics.jpg'),
                'description' => 'Learn about our commitment to ethical approaches to research and about ow we handle data.',
            ],
            ]
        ])
    @endcomponent

@endsection
