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
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmOEvcWo1XQ79dYrnQGQlaNO" target="_blank"class="font-bold text-stats4sd-red">Sampling decision assistant</a>, which answers common questions about sampling and helps you build a sampling scheme.
                        </li>
                        <li>
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmM2UYcm_1ZZW_ZhKTBQzpGI" target="_blank"class="font-bold text-stats4sd-red">Introduction to ODK</a>, which helps you learn about ODK and mobile data collection.
                        </li>
                        <li>
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmM_ISpxwoiXD2SioG3MWNqg" target="_blank"class="font-bold text-stats4sd-red">Introduction to R</a>, introducing you to the functions and packages that can be used in R, their benefits, and how to use them effectively.
                        </li>
                        <li>
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmMlefd36ZQKWCn00F_J5YjX" target="_blank"class="font-bold text-stats4sd-red">Involving farmers around the research cycle</a>, explaining the rationale of involving farmers and how research methods and assumptions evolve and are adapted when farmers are involved.
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=cp0HXjvbbCk" target="_blank"class="font-bold text-stats4sd-red">Gestión de datos: Uso ético de los datos</a> (Spanish).
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=VEYeygRj4U8" target="_blank"class="font-bold text-stats4sd-red">Expérimentation rapide</a> (French).
                        </li>
                    </ul>
                '
            ]
        ],
        'additionalContent' => '
            <p>
                The full collection of Stats4SD videos and video playlists can be found on the <a href="https://www.youtube.com/@Stats4SD" target="_blank"class="font-bold text-stats4sd-red">Stats4SD YouTube channel</a>. 
            </p>
            <p class="pt-2">
                You can find other e-learning materials in the <a href="https://stats4sd.org/resources" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
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