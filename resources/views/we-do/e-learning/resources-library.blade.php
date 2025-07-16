@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/resources.webp',
        'headerAlt' => 'Resources library page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Resources Library"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            As part of our work with our partners, we develop materials such as reports, articles, videos, guides and courses that support good practice, research and learning in the broad range of topics relevant to our work.
                            Wherever possible, we aim to make these publicly available to all who could benefit from them. We therefore maintain the
                <a href="'.config('app.resources_site_url').'" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>, a searchable database in which we store and share materials produced by our team, along with selected links to materials from other sources that we recommend.
            </p>


            ',
        'introcol2' => '
            <p>

                        The Stats4SD Resources Library includes hundreds of resources, sorted into various categories of research methods and broad topics. You can explore these categories or search and filter to discover free materials for reference, teaching or individual capacity-building. You can also browse or search our collections and link to other resource hubs.
                    </p>
                                        <div class="w-auto mt-12 ">
                        <a href="'.config('app.resources_site_url').'"
                            class="inline-block bg-stats4sd-red text-white px-6 py-3 font-semibold rounded-3xl hover-effect uppercase">
                            Stats4SD Resources Library
                        </a>
                    </div>
        ',


        'additionalContent' => '',
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
