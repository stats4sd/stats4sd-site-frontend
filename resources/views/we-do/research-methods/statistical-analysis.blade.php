@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Statistical analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Statistical analysis"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>As professional statisticians, we focus on helping to match the needs of your project with appropriate and robust statistical methods. Our analytical approach is based on a solid understanding of 
                statistical theory and is human-centred, whether using generalised linear modelling, mixed models, multivariate analysis, machine learning approaches (see AI for analysis) or Bayesian techniques. 
                Our main priority, regardless of methodology we use, is to provide informative and clearly presented results that can improve your understanding and provide actionable insights for your project.
            </p>
            <p>Our preferred tool for statistical analysis is R, but our team has a broad range of experience including Stata, QGIS, SPSS, Python, PowerBI and, of course, Microsoft Excel. Our statistical analysts 
                and programmers are flexible and can work with your project’s requirements.
            </p>
            <p>The statisticians at Stats4SD work closely with data systems and platforms colleagues. In some cases, clients may ask us to build a platform to handle their data, but they prefer to do 
                their own analysis. In others, complex statistical analysis may be needed, and we can provide it. We can also support our clients’ in-house analysis processes.
            </p>
            <p>Often the projects we support adopt a combination of approaches: part of the analysis is done in-house or by project team members, perhaps with support from us, and part of the 
                analysis is provided by Stats4SD.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Statistical analysis for ProSoil survey',
                'description' => '
                    <p>Stats4SD did the statistical analysis for a ProSoil survey of 800 farm households in Kenya, Ethiopia, Benin and Madagascar, which used the Tool for Agroecology Performance Evaluation 
                        (TAPE) of the UN Food and Agriculture Organisation (FAO). The survey aimed to understand if ProSoil’s activities had had a significant impact on farmers’ adoption of agroecology 
                        practices and overall system performance (see Providing end-to-end support for ProSoil survey).
                    </p>
                    <p>For the analysis, the data from the four countries was treated as a single dataset. The examples below show some of the analysis for TAPE Step 1. Full results can be found in 
                        the cross-country report.
                    </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'Analytical support for a study of agroecology practices',
                'description' => '
                    <p>
                        In 2022, the Agroecology TPP launched a study to document and evaluate the socio-economic viability of agroecology practices across Africa. The study involved 12 teams working in 9 African countries and included a farm survey.
                    </p>
                    <p>
                        To support the survey, Stats4SD programmed a set of data processing scripts in R to generate sets of descriptive indicators and run a Multiple Component Analysis (MCA).
                    </p>
                    <p>
                        The R scripts were included in the platform that Stats4SD developed to hold the data, so that the 12 teams that had collected the data could do automated data processing to produce a standard set of results.
                    </p>
                    <p>
                        Each team received the automated results as outputs, as well as the raw data, and could then do additional analysis of their own.
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