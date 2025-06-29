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
        'lead_paragraph' => '
            Many organisations are looking for ways to present information in a clear, comparable and attractive way for their audiences. Indicators and data visualisations are a good way to do this, particularly when dealing with large datasets and looking to compare key results between organisations, projects or locations in a way that will catch people’s attention. 
        ',
        'content' => '
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

                    <p class="pt-2">
                        Stats4SD worked with the PLAN consultant to define the domains, create the methodology for the indices and build the database. The indicators were drawn from internationally recognised sources available online, with Sustainable Development Goal (SDG) indicators prioritised to support regular updating of the Index. 
                    </p>
                ',
            ],
            [
                'title' => 'The agroecology finance assessment tool',
                'image' => 'images/wedo/rm/casestudies/financeassess.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        Stats4SD created an agroecology finance assessment tool for the Agroecology Coalition to answer the questions “how agroecological is my funding portfolio?” and “how do I compare with others?” 
                    </p>
                    <p class="pt-2">
                        The tool comprises a set of indicators and data visualisations that institutions can use to evaluate their own initiatives against those of others (aggregated to protect confidentiality). To determine how ‘agroecological’ a recipient of a funding initiative is, we used the Agroecology Coalition’s 
                        <a href="https://agroecology-coalition.org/wp-content/uploads/2024/04/Tracking-tool-manual-EN-2024.pdf" target="_blank" class="font-bold text-stats4sd-red">Agroecology Assessment Framework</a> which is based on the 13 agroecology principles of 
                        <a href="https://openknowledge.fao.org/server/api/core/bitstreams/ff385e60-0693-40fe-9a6b-79bbef05202c/content" target="_blank" class="font-bold text-stats4sd-red">High Level Panel of Experts (HLPE)</a> on Food Security and Nutrition of the United Nations Committee on World Food Security. 
                    </p>


                ',
                'secondcolumn' => '
                                    <p class="pt-2">
                        The agroecology finance assessment tool shows the indicators for all initiatives and all agroecology principles together (below). It also provides detailed performance indicators for each initiative in relation to each agroecological principle.
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
                'id' => 'alex_thomson',
                'name' => 'Alex Thomson',
                'title' => 'Statistician',
                'email' => 'alex.thomson@stats4sd.org',
                'linkedin' => 'https://www.linkedin.com/in/alex-t-649a6b211/',
                'github' => '',
                'google_scholar' => 'https://scholar.google.co.uk/citations?user=M9KJp0gAAAAJ&hl=en',
                'avatar' => 'images/team/AlexT.jpg',
                'long_description' => 'Alex provides support for statistical analysis across a wide range of topics. He is interested in creating informative and effective data visualisations, with particular pride in seeing them published in reports and other publications. He is proficient in using R for a range of applications including analysis and data manipulation, and is gaining experience in building Shiny applications and spatial analysis. He is also skilled in creating survey forms with ODK and managing their use for data collection. Alex has a BSc in Population and Geography and an MSc in Social Research Methods from the University of Southampton.',
            ],
        ],
    ])
    @endcomponent

@endsection