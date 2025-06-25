@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Surveys page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Surveys"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            The Stats4SD team is experienced in survey design and management, using its knowledge of statistical principles and experience with the latest tools and systems for collecting 
            and managing data. We design and run large-scale surveys, we build databases to manage and access the data, and we can also advise you on statistical analysis.
        ',
        'content' => '
            <p>Surveys are a traditional way of collecting (mainly) quantitative data in a structured manner that allows you to reach conclusions about the population of interest – normally 
                a defined group of people or households (or something that they can provide information about, such as the crops they grow or the livestock they own). If a survey is properly 
                designed, the results will be both reliable and comparable, for instance between places and over time.
            </p>
            <p class="pt-2">Although surveys can be expensive, we believe that they remain an important part of our research methods toolbox. Unlike many alternatives, a well-designed survey can provide 
                estimates that are representative of the population of interest. This is essential if the information is to be used to inform policies and actions.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'The Ukraine national iodine survey',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>A survey was commissioned by UNICEF Ukraine in 2020 because of concerns about iodine deficiency among women of reproductive age. The survey was carried out by a local NGO - 
                        the Ukrainian Institute for Social Research after Oleksandr Yaremenko - with support from Jacky Knowles, an international specialist in iodine deficiency, and from Stats4SD.
                    </p>
                    <p class="pt-2">We designed the survey methodology and sampling scheme, developed the data collection forms, helped train field staff, and set up a platform to receive the information, 
                        including laboratory analyses. We then analysed the data and contributed to writing up the survey results.
                    </p>
                    <p class="pt-2">The survey team in Ukraine faced extreme challenges. First the Covid-19 pandemic, which delayed the start of fieldwork and meant that face-to-face interviews were no longer 
                        possible and had to be replaced by phone calls. Then the Russian invasion in March 2022, which meant that the laboratory analysis of urine and salt samples was suspended 
                        for two months. However, the team in Ukraine was determined to complete the work. We provided support throughout, finding solutions when the original survey 
                        methods were longer viable.
                    </p>
                ',
            ]
        ],
        'additionalContent' => '',
        'teamData' => [
            [
                'id' => 'alex_riba',
                'name' => 'Alex Riba',
                'title' => 'Senior Statistician',
                'email' => 'alexriba@stats4sd.org',
                'linkedin' => 'linkedin.com/in/alex-riba-11401292',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?view_op=new_articles&hl=ca&imq=Alex+Riba#',
                'avatar' => 'images/team/AlexR.jpg',
                'long_description' => 'Alex leads our work on Monitoring and Evaluation (M&E), impact assessment and the development of indices. He is also an expert in surveys and statistical analysis. He has over 25 years of experience in research, research methods and teaching statistics. At Stats4SD, Alex has worked with projects in areas such as food and agriculture, international development, health and nutrition, education, and climate change. For quantitative studies, his expertise guides the process from the design stage to the reporting of results, as he supports areas such as survey design, sampling, digital data collection, creation of analysis plans and complex statistical analysis. Alex has a PhD in Statistics and an MSc in Humanities. Before joining Stats4SD, he worked for the Universitat Politecnica de Catalunya, Barcelona Tech, and for the University of Reading.',
            ],
            [
                'id' => 'dave_mills',
                'name' => 'Dave Mills',
                'title' => 'Senior Data Engineer',
                'email' => 'd.e.mills@stats4sd.org',
                'linkedin' => 'https://www.linkedin.com/in/dave-mills-ssd',
                'github' => 'https://github.com/dave-mills',
                'google_scholar' => '',
                'avatar' => 'images/team/Dave.jpg',
                'long_description' => 'Dave leads Stats4SD’s data systems and platforms team, providing robust technical solutions to support complex data management challenges. He specialises in database management, web design, and building data collection tools with ODK to support large-scale data collection efforts. He has over a decade of experience working with large and small projects. In his work, Dave is keen on promoting the careful and considered use of technology to support the work of our partners and provides both technical expertise and an understanding of when and how technology can be brought in to improve efficiency and quality.',
            ],
            [
                'id' => 'sam_dumble',
                'name' => 'Sam Dumble',
                'title' => 'Senior Statistician',
                'email' => 's.dumble@stats4sd.org',
                'linkedin' => '',
                'github' => 'https://github.com/sdumble1',
                'google_scholar' => '',
                'avatar' => 'images/team/Sam.jpg',
                'long_description' => 'Sam has over 15 years’ experience in supporting the design, implementation and analysis of quantitative research including surveys and Monitoring and Evaluation (M&E) programmes. His role is to ensure that designs address the research questions, methodological choices are robust and results are communicated clearly – for example using indicators, data visualisations and dashboards. He is also involved in developing courses and other e-learning materials for those trying to improve their skills with statistics and data handling, and is particularly interested in the use of R to ensure reproducible and robust analysis of data. Sam has an MSc in Statistics with Applications in Medicine from the University of Southampton. Before joining Stats4SD, he worked in the medical industry and at the University of Reading.',
            ],
        ],
    ])
    @endcomponent

@endsection