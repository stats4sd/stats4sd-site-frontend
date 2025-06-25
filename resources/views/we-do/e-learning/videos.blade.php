@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Videos and video playlists page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Videos and video playlists"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Stats4SD creates e-learning materials in a variety of formats: courses,  videos and video playlists, webinars and seminars, and blogs. 
        ',
        'content' => '
            <p>
                Our educational videos explore topics ranging from data collection and statistical analysis to agroecology and farmer research. We also provide video ‘playlists’, which are a set of videos exploring a topic in greater depth. 
            </p>
            <p>
                Some of the videos relating to our work in South America are in Spanish or subtitled in Spanish, and some of the videos for our work in West Africa are in French or subtitled in French. 
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of the videos we have created',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <ul class="list-disc pl-6">
                        <li>
                            Sampling decision assistant, which answers common questions about sampling and helps you build a sampling scheme
                        </li>
                        <li>
                            Introduction to ODK, which helps you learn about ODK and mobile data collection
                        </li>
                        <li>
                            Introduction to R, introducing you to the functions and packages that can be used in R, their benefits, and how to use them effectively
                        </li>
                        <li>
                            Involving farmers around the research cycle, explaining the rationale of involving farmers and how research methods and assumptions evolve and are adapted when farmers are involved
                        </li>
                        <li>
                            Gestión de datos: Uso ético de los datos (Spanish)
                        </li>
                        <li>
                            Expérimentation rapide (French)
                        </li>
                    </ul>
                '
            ]
        ],
        'additionalContent' => '
            <p>
                The full collection of Stats4SD videos and video playlists can be found on the Stats4SD YouTube channel. 
            </p>
            <p class="pt-2">
                You can find other e-learning materials in the Stats4SD Resources Library.
            </p>
        ',
        'teamData' => [
            [
                'id' => 'emily_nevitt',
                'name' => 'Emily Nevitt',
                'title' => 'Instructional & Graphic Designer',
                'email' => 'emily@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => '',
                'avatar' => 'images/team/Emily.jpg',
                'long_description' => 'Emily’s role focuses on creating effective communication and learning products, as well as providing graphic design and multimedia support for projects. With experience in both education and design, Emily is interested in combining these skills to create products that are attractive, engaging and easy to understand. This involves developing interactive e-learning courses, contributing to the planning of seminars, workshops and other capacity-building events, creating and editing videos, designing websites, graphics and documents and helping maintain and organise the Stats4SD Resources Library.',
                ]
        ],
    ])
    @endcomponent

@endsection