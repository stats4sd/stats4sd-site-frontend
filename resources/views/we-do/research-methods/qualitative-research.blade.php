@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Qualitative research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Qualitative research"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>
                Although Stats4SD was founded by quantitative data specialists, we recognise the importance of qualitative data in research processes. Our team includes qualitative methods specialists who:
            </p>

            <ul>
                <li>
                    Contribute to projects of our clients where a qualitative research element is needed, such as in our endline assessment for the Aga Khan Foundation Canada.
                </li>
                <li>
                    Conduct qualitative research and write up the results as reports. For example: <em>An Overview of the Slow Food Programmes: Presidia, Food Gardens and Earth Markets in Kenya and Uganda</em>.
                </li>
                <li>
                    Support CRFS project grantees and students in Africa and South America in writing up their research findings and publishing them in scientific journals, so they can contribute to global debates.
                </li>
                <li>
                    Support the Agroecology Fund’s work with grassroots organisations on building evidence-based cases for agroecology (see below).
                </li>
                <li>
                    Create training materials for qualitative data collection and analysis, such as Stats4SD’s videos on <em>Qualitative Data Management</em> and <em>Qualitative Data Analysis</em>, and practical guidance for practitioners on <em>Participant Observation</em>.
                </li>
            </ul>
        ',
        'caseStudies' => [
            [
                'title' => 'Building evidence-based cases for agroecology',
                'description' => '
                    <p>
                        The Agroecology Fund partnered with Stats4SD in 2020 to launch the Grassroots Evidence for Agroecology (GEA) Initiative. Under this initiative, Stats4SD supported the Agroecology Fund by:
                    </p>
                    <ul>
                        <li>
                            Developing and pilot testing a methodology and process to support grassroots organisations’ efforts to build and communicate evidence to their target audiences and demonstrate their impact (see Grassroots Evidence for Agroecology – Pilot Report May 2024).
                        </li>
                        <li>
                            Creating a GEA online course that is free and available in English, French and Spanish – see video introduction here.
                        </li>
                        <li>
                            Building an online catalogue to share cases and evidence from the GEA initiative. The catalogue was launched in February 2025 with the 13 cases from the pilot study. It will grow as other cases are developed by grassroots organisations.
                        </li>
                    </ul>
                    <p>
                        The qualitative research team at Stats4SD was central to this work, helping organisations to build coherent cases and compelling arguments for agroecology based on a framework and a logical argument. The cases aim to influence farmers, communities, donors, policymakers, researchers and consumers – key actors in the transformation of food systems.
                    </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection