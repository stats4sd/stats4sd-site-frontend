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
                'id' => 'ciara_mchugh',
                'name' => 'Ciara McHugh',
                'title' => 'Data Engineer',
                'email' => 'ciara@stats4sd.org',
                'linkedin' => 'www.linkedin.com/in/ciara-mchugh',
                'github' => '',
                'google_scholar' => '',
                'avatar' => 'images/team/Ciara.jpeg',
                'long_description' => 'Ciara is experienced in developing data systems to support research, monitoring and evaluation (M&E) and decision making. She is passionate about usability and intuitive design. She enjoys creating clear, accessible tools that make data easier to collect, manage and understand for a wide range of users, from farmers and field teams to researchers and decision makers. Ciara works in both English and Spanish, supporting collaboration across diverse teams and regions. Before joining Stats4SD, she studied Actuarial Mathematics at Dublin City University and volunteered with a health and development NGO in Honduras.',
            ]
        ],
    ])
    @endcomponent

@endsection
