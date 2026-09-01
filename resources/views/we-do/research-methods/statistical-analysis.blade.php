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
        'introcol1' => '
            As professional statisticians, we focus on helping to match the needs of your project with appropriate and robust statistical methods. Our analytical approach is based on a solid understanding of 
                statistical theory and is human-centred, whether using generalised linear modelling, mixed models, multivariate analysis, machine learning approaches (see 
                <a href="' . route('we-do.research-methods.ai') . '" class="font-bold text-stats4sd-red">AI for analysis</a>) or Bayesian techniques. Our main priority, regardless of methodology we use, is to provide informative and clearly presented results that can improve your understanding and provide actionable insights for your project.
                            <p class="pt-2">Our preferred tool for statistical analysis is R, but our team has a broad range of experience including Stata, QGIS, SPSS, Python, PowerBI and, of course, Microsoft Excel. Our statistical analysts 
                and programmers are flexible and can work with your project’s requirements.
            </p>
        ',
        'introcol2' => '

            <p class="">The statisticians at Stats4SD work closely with 
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
                        <a href="https://www.fao.org/agroecology/Database/tools-tape/en" target="_blank" class="font-bold text-stats4sd-red">Tool for Agroecology Performance Evaluation (TAPE)</a> of the UN Food and Agriculture Organisation (FAO). The survey aimed to understand if ProSoil’s activities had had a significant impact on farmers’ adoption of agroecology 
                        practices and overall system performance (see 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '#prosoil-survey" class="font-bold text-stats4sd-red">Providing end-to-end support for ProSoil survey</a>).
                    </p>
                    
                ',
                 'secondcolumn' => '
                    <p>
                    For the analysis, the data from the four countries was treated as a single dataset. In the example shown here, Characterization of Agroecological Transition (CAET) scores – which evaluate the level of agroecological transition – were plotted using a combination of boxplots and violin plots for ProSoil and comparison group. These were accompanied by tables of results from multiple t-tests to assess whether the difference in means between the ProSoil and comparison group was statistically significant.
                        </p>
                        <p class="mt-2">Full results can be found in 
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
                    In 2022, the <a href="https://www.agroecologytpp.org/about/" target="_blank" class="font-bold text-stats4sd-red">Agroecology TPP</a> launched a study to document and evaluate the socio-economic viability of agroecology practices across Africa. The study involved 12 teams working in 9 African countries and included a farm survey. To support the survey, Stats4SD programmed data processing scripts in R to generate sets of descriptive indicators and run a Multiple Component Analysis (MCA).

                  
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
        'teamData' => \App\Support\Team::members(['sam_dumble', 'alex_riba', 'jane_poole']),
    ])
    @endcomponent

@endsection