@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Surveys page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Surveys"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>The Stats4SD team is experienced in survey design and management, using its knowledge of statistical principles and experience with the latest tools and systems for collecting 
                and managing data. We design and run large-scale surveys, we build databases to manage and access the data, and we can also advise you on statistical analysis.
            </p>
            <p>Surveys are a traditional way of collecting (mainly) quantitative data in a structured manner that allows you to reach conclusions about the population of interest – normally 
                a defined group of people or households (or something that they can provide information about, such as the crops they grow or the livestock they own). If a survey is properly 
                designed, the results will be both reliable and comparable, for instance between places and over time.
            </p>
            <p>Although surveys can be expensive, we believe that they remain an important part of our research methods toolbox. Unlike many alternatives, a well-designed survey can provide 
                estimates that are representative of the population of interest. This is essential if the information is to be used to inform policies and actions.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'The Ukraine national iodine survey',
                'description' => '
                    <p>A survey was commissioned by UNICEF Ukraine in 2020 because of concerns about iodine deficiency among women of reproductive age. The survey was carried out by a local NGO - 
                        the Ukrainian Institute for Social Research after Oleksandr Yaremenko - with support from Jacky Knowles, an international specialist in iodine deficiency, and from Stats4SD.
                    </p>
                    <p>We designed the survey methodology and sampling scheme, developed the data collection forms, helped train field staff, and set up a platform to receive the information, 
                        including laboratory analyses. We then analysed the data and contributed to writing up the survey results.
                    </p>
                    <p>The survey team in Ukraine faced extreme challenges. First the Covid-19 pandemic, which delayed the start of fieldwork and meant that face-to-face interviews were no longer 
                        possible and had to be replaced by phone calls. Then the Russian invasion in March 2022, which meant that the laboratory analysis of urine and salt samples was suspended 
                        for two months. However, the team in Ukraine was determined to complete the work. We provided support throughout, finding solutions when the original survey 
                        methods were longer viable.
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