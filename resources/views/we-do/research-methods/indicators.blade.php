@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/datavis.png',
        'headerAlt' => 'Indicators and data visualisations page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Indicators and data visualisations"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
            Many organisations are looking for ways to present information in a clear, comparable and attractive way for their audiences. Indicators and data visualisations are a good way to do this, particularly when dealing with large datasets and looking to compare key results between organisations, projects or locations in a way that will catch people’s attention. 
        ',
        'introcol2' => '
            <p>
                We work with our clients to understand their data presentation needs and then build products to suit their needs. This work is often linked to our work on 
                <a href="' . route('we-do.research-methods.statistical-analysis') . '" class="font-bold text-stats4sd-red">statistical analysis</a> and 
                <a href="' . route('we-do.data-systems.dashboards') . '" class="font-bold text-stats4sd-red">dashboards</a>.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Asia Girls’ Leadership Index',
                'image' => 'images/wedo/rm/casestudies/girlsleadership.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        We contributed to a project for PLAN International to create a Girls’ Leadership Index for the 
                        <a href="https://plan-international.org/uploads/2021/12/plan_2020asiagirlsreport_interactive.pdf" target="_blank" class="font-bold text-stats4sd-red">2020 Asia Girls Report</a>. PLAN wanted to be able to compare data across 19 countries and two regions in Asia for six domains: education, economic opportunities, protection, health, political voice and representation, and laws and policies. 
                    </p>

                ',
                'secondcolumn' => '
                    <p>
                        Stats4SD worked with the PLAN consultant to define the domains, create the methodology for the indices and build the database. The indicators were drawn from internationally recognised sources available online, with Sustainable Development Goal (SDG) indicators prioritised to support regular updating of the Index. 
                    </p>
                ',
            ],
            [
                'title' => 'The agroecology finance assessment tool',
                'image' => 'images/wedo/rm/casestudies/financeassess.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p id="agroecology-finance-assessment-tool">
                        Stats4SD created an agroecology finance assessment tool for the Agroecology Coalition to answer the questions “how agroecological is my funding portfolio?” and “how do I compare with others?” 
                    </p>
                    <p class="pt-2">
                    The tool comprises a set of indicators and data visualisations that institutions can use to evaluate their own initiatives against those of others (aggregated to protect confidentiality). To determine how agroecological a recipient of a funding initiative is, we used the Agroecology Coalition’s <a href="https://agroecology-coalition.org/wp-content/uploads/2024/04/Tracking-tool-manual-EN-2024.pdf" target="_blank" class="font-bold text-stats4sd-red">Agroecology Assessment Framework</a> which is based on the 13 agroecology principles of <a href="https://openknowledge.fao.org/server/api/core/bitstreams/ff385e60-0693-40fe-9a6b-79bbef05202c/content" target="_blank" class="font-bold text-stats4sd-red">High Level Panel of Experts (HLPE)</a> on Food Security and Nutrition of the United Nations Committee on World Food Security.
                        
                    </p>


                ',
                'secondcolumn' => '
                    <p>
                        The agroecology finance assessment tool shows the indicators for all initiatives and all agroecology principles together. It also provides detailed performance indicators for each initiative in relation to each agroecological principle.
                    </p>
                                    <p class="pt-2">
                        You can find information about the agroecology finance assessment tool and methods 
                        <a href="https://agroecology-coalition.org/agroecology-finance-assessment-tool/" target="_blank" class="font-bold text-stats4sd-red">here</a>. To use the tool itself, registration is required.
                    </p>
                    <p class="pt-2">
                        Stats4SD also contributed to the development of the Agroecology Assessment Framework – see article 
                        <a href="https://online.ucpress.edu/elementa/article/11/1/00042/197669/Measuring-agroecology-Introducing-a-methodological" target="_blank" class="font-bold text-stats4sd-red">here</a>.
                    </p>
                    ',
            ]
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['alex_riba', 'sam_dumble', 'dave_mills', 'alex_thomson']),
    ])
    @endcomponent

@endsection