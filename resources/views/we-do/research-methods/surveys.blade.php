@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/survey1.jpg',
        'headerAlt' => 'Surveys page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Surveys"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
            The Stats4SD team is experienced in survey design and management, using its knowledge of statistical principles and experience with the 
            <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">latest tools and systems for collecting and managing data</a>. 
            We design and run large-scale surveys, build 
            <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">databases to manage and access the data</a>, 
            and can also advise you on 
            <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">statistical analysis</a>.
             <p class="pt-2">Surveys are a traditional way of collecting (mainly) quantitative data in a structured manner that allows you to reach conclusions about the population of interest – normally 
                a defined group of people or households (or something that they can provide information about, such as the crops they grow or the livestock they own). If a survey is properly 
                designed, the results will be both reliable and comparable, for instance between places and over time.
            </p>
        ',
        'introcol2' => '
           
            <p class="pt-2">Although surveys can be expensive, we believe that they remain an important part of our research methods toolbox. Unlike many alternatives, a well-designed survey can provide 
                estimates that are representative of the population of interest. This is essential if the information is to be used to inform policies and actions.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'The Ukraine national iodine survey',
                'image' => 'images//wedo/rm/casestudies/salt.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        A survey was commissioned by UNICEF Ukraine in 2020 to provide an evidence base from which to design an appropriate strategy and programme to achieve optimal iodine status among the population in Ukraine. The national survey committee included UNICEF, the State Institution ‘Public Health Center’ of the Ministry of Health of Ukraine, the Institute of Endocrinology and Metabolism and the Ukrainian Institute for Social Research after Oleksandr Yaremenko. All aspects of the survey were supported by Jacky Knowles, an international specialist in iodine deficiency, and Stats4SD.
                    </p>
                    <p class="pt-2">We designed the survey methodology and sampling scheme, developed the data collection forms, helped train field staff, and set up a platform to receive the information, 
                        including laboratory analyses. We then analysed the data and contributed to writing up the <a href="https://www.unicef.org/ukraine/en/media/42431/file/Ukraine_Iodine_Survey_Report.pdf" target="_blank" class="font-bold text-stats4sd-red">survey results</a>.
                    </p>

                ',
                'secondcolumn' => '
                    <p>
                        The survey team in Ukraine faced extreme challenges. First the Covid-19 pandemic, which delayed the start of fieldwork and meant that face-to-face interviews were no longer possible and had to be replaced by phone calls. Then the Russian invasion in March 2022, which meant that the laboratory analysis of urine and salt samples was suspended for two months. However, the team in Ukraine was determined to complete the work. Stats4SD provided support throughout, finding solutions when the original survey methods were no longer viable.
                    </p>
                ',
            ]
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['alex_riba', 'dave_mills', 'sam_dumble']),
    ])
    @endcomponent

@endsection