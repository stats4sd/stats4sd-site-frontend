@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/statan.jpg',
        'headerAlt' => 'Statistical analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Statistical analysis"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            As professional statisticians, we focus on helping to match the needs of your project with appropriate and robust statistical methods. Our analytical approach is based on a solid understanding of 
                statistical theory and is human-centred, whether using generalised linear modelling, mixed models, multivariate analysis, machine learning approaches (see 
                <a href="' . route('we-do.research-methods.ai') . '" class="font-bold text-stats4sd-red">AI for analysis</a>) or Bayesian techniques. Our main priority, regardless of methodology we use, is to provide informative and clearly presented results that can improve your understanding and provide actionable insights for your project.
        ',
        'content' => '
            <p>Our preferred tool for statistical analysis is R, but our team has a broad range of experience including Stata, QGIS, SPSS, Python, PowerBI and, of course, Microsoft Excel. Our statistical analysts 
                and programmers are flexible and can work with your project’s requirements.
            </p>
            <p class="pt-2">The statisticians at Stats4SD work closely with 
                <a href="' . route('we-do.data-systems') . '" class="font-bold text-stats4sd-red">data systems and platforms</a> colleagues. In some cases, clients may ask us to build a platform to handle their data, but they prefer to do 
                their own analysis. In others, complex statistical analysis may be needed, and we can provide it. We can also support our clients’ in-house analysis processes.
            </p>
            <p class="pt-2">Often the projects we support adopt a combination of approaches: part of the analysis is done in-house or by project team members, perhaps with support from us, and part of the 
                analysis is provided by Stats4SD.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Statistical analysis for ProSoil survey',
                'image' => 'images/wedo/rm/casestudies/prosoilanalysis.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>Stats4SD did the statistical analysis for a ProSoil survey of 800 farm households in Kenya, Ethiopia, Benin and Madagascar, which used the 
                        <a href="https://www.fao.org/agroecology/tools-tape/en" target="_blank" class="font-bold text-stats4sd-red">Tool for Agroecology Performance Evaluation (TAPE)</a> of the UN Food and Agriculture Organisation (FAO). The survey aimed to understand if ProSoil’s activities had had a significant impact on farmers’ adoption of agroecology 
                        practices and overall system performance (see 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '#prosoil-survey" class="font-bold text-stats4sd-red">Providing end-to-end support for ProSoil survey</a>).
                    </p>
                    
                ',
                 'secondcolumn' => '
                 <p class="">For the analysis, the data from the four countries was treated as a single dataset. The examples below show some of the analysis for TAPE Step 1. Full results can be found in 
                        the <a href="https://cifor-icraf.org/publications/pdf_files/WPapers/TPP-WP-8.pdf" target="_blank" class="font-bold text-stats4sd-red">cross-country report</a>.
                    </p>
                    ',
            ],
            [
                'title' => 'Analytical support for a study of agroecology practices',
                'image' => 'images/wedo/rm/casestudies/tpp1.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        In 2022, the 
                        <a href="https://www.agroecologytpp.org/about/" target="_blank" class="font-bold text-stats4sd-red">Agroecology TPP</a> launched a study to document and evaluate the socio-economic viability of agroecology practices across Africa. The study involved 12 teams working in 9 African countries and included a farm survey. To support the survey, Stats4SD programmed a set of data processing scripts in R to generate sets of descriptive indicators and run a Multiple Component Analysis (MCA).
                    </p>

                ',
                                 'secondcolumn' => '
                                    <p >
                        The R scripts were included in the <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">platform</a> that Stats4SD developed to hold the data, so that the 12 teams that had 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">collected the data</a> could do automated data processing to produce a standard set of results. Each team received the automated results as outputs, as well as the raw data, and could then do additional analysis of their own.
                    </p>
                    ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => [
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
                'id' => 'jane_poole',
                'name' => 'Jane Poole',
                'title' => 'Research Methods Specialist',
                'email' => 'j.poole@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?user=d67lv4MAAAAJ',
                'avatar' => 'images/team/Jane.jpg',
                'long_description' => 'Jane heads Stats4SD’s research methods team in East Africa, which aims to embed high-quality methods into research and development programmes in the region. She specializes in integrating into projects robust research methods - from study design and sampling to development of data collection tools, analysis and presentation - to enhance their rigour and results. She has over 25 years of experience supporting multi-disciplinary research and development initiatives in areas such as forestry and agroforestry, plant health, livestock (breeding, nutrition, and health), and livelihoods. Her expertise also covers key thematic areas including gender equity, monitoring and evaluation (M&E) and impact assessment. She has significant experience and interest in all aspects of research ethics including prior informed consent and data protection.',
            ],
        ],
    ])
    @endcomponent

@endsection