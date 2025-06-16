@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Indicators and data visualisations page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Indicators and data visualisations"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>
                Many organisations are looking for ways to present information in a clear, comparable and attractive way for their audiences. Indicators and data 
                visualisations are a good way to do this, particularly when dealing with large datasets and looking to compare key results between organisations, 
                projects or locations in a way that will catch people’s attention. We work with our clients to understand their data presentation needs and then 
                build products to suit their needs. This work is often linked to our work on statistical analysis and dashboards.
            </p>',
        'caseStudies' => [
            [
                'title' => 'Asia Girls’ Leadership Index',
                'description' => '
                    <p>
                        We contributed to a project for PLAN International to create a Girls’ Leadership Index for the 2020 Asia Girls Report. PLAN wanted to be able 
                        to compare data across 19 countries and two regions in Asia for six domains: education, economic opportunities, protection, health, political 
                        voice and representation, and laws and policies. 
                    </p>
                    <p>
                    Stats4SD worked with the PLAN consultant to define the domains, create the methodology for the indices and build the database. The indicators 
                    were drawn from internationally recognised sources available online, with Sustainable Development Goal (SDG) indicators prioritised to 
                    support regular updating of the Index. 
                    </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'The agroecology finance assessment tool',
                'description' => '
                    <p>
                        Stats4SD created an agroecology finance assessment tool for the Agroecology Coalition to answer the questions “how agroecological is my funding portfolio?” and “how do I compare with others?” 
                    </p>
                    <p>
                        The tool comprises a set of indicators and data visualisations that institutions can use to evaluate their own initiatives against those of others (aggregated to protect confidentiality). To determine how ‘agroecological’ a recipient of a funding initiative is, we used the Agroecology Coalition’s Agroecology Assessment Framework which is based on the 13 agroecology principles of High Level Panel of Experts (HLPE) on Food Security and Nutrition of the United Nations Committee on World Food Security. 
                    </p>
                    <p>
                        The agroecology finance assessment tool shows the indicators for all initiatives and all agroecology principles together (below). It also provides detailed performance indicators for each initiative in relation to each agroecological principle.
                    </p>
                    <p>
                        You can find information about the agroecology finance assessment tool and methods here. To use the tool itself, registration is required.
                    </p>
                    <p>
                        Stats4SD also contributed to the development of the Agroecology Assessment Framework – see article here.
                    </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ]
        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection