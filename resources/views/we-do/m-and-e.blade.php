@extends('layouts.app')

@section('content')

    @component('components.level-2-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'M&E and impact assessment page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("M&E and impact assessment"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Stats4SD provides support for Monitoring and Evaluation (M&E) and impact assessment of international development programmes. 
                Our support incorporates both quantitative and qualitative aspects.
        ',
        'content' => '
            <p>On the quantitative side, it may involve advising on survey methods and efficient sampling design, development of data 
                collection instruments, in-country and remote training and support for fieldwork teams, and quality assurance and analysis of results. 
            </p>
            <p class="pt-2">On the qualitative side, in-depth interviews, focus groups discussions or workshops may be helpful. Our analysts are 
                experienced in collecting and analysing qualitative data (text, audio recordings, images etc). We also try to maximise 
                any positive feedback loops between quantitative and qualitative data in our study designs.
            </p>
            <p class="pt-2">Stats4SD’s Data systems and platforms team can also provide end-to-end data collection and management 
                systems for your M&E and impact assessment studies.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Innovative methods for evaluating programmes for migrants returning to the Horn of Africa',
                'description' => '
                <p>
                    In 2023 the UK Evaluation Society awarded its Innovation in Methodologies prize, sponsored by Ispos UK, to a consortium led by Itad in which Stats4SD provided quantitative evaluation design, analysis and interpretation. The prize was awarded for the IMPACT Study which evaluated a joint programme of the European Union and the International Organization for Migration (IOM) that assisted migrants to return to Ethiopia, Somalia and Sudan and provided services and grants to foster their successful reintegration. 
                </p>
                <p class="pt-2">
                    On awarding the prize, Ipsos UK highlighted three methodological innovations that were contributed to the study by Andrew Pinney from Stats4SD: adopting a calibration group approach to overcome the absence of a clear counterfactual, devising an appropriate snowball sampling strategy, and conducting retrospective baseline data collection at the same time as the endline as a solution to significantly reduced returnee flows at the start of the COVID-19 pandemic.
                </p>
                <p class="pt-2">
                    Davide Bruscoli, Regional Information Management Officer for East and Horn of Africa of the IOM, said:
                </p>
                <blockquote class="pl-4">
                    “I am glad to say that the study achieved all its objectives and pushed the evaluability frontier to include a topical area (assisted voluntary return and reintegration) of development intervention that was previously left out. 
                    Throughout the evaluation process, the evaluation team, led by Andrew Pinney* and Itad, demonstrated a high level of professionalism, expertise, and dedication.                 The study was conducted in close collaboration with IOM – even, I would say, in a spirit of partnership rather than simple service provision – with Itad and the evaluation team walking several ‘extra miles’.”
                </blockquote>
                <p>
                    * Dr Andrew Pinney, Stats4SD, was quantitative design and technical lead of the IMPACT Study evaluation team.
                </p>
                </p>',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'Creating a baseline for Supporting Girls to Thrive',
                'description' => '
                <p>
                    In 2018, UNICEF launched the Supporting Girls to Thrive programme in Sorong, West Papua (Indonesia), with support from the David Beckham 7 Fund. The programme aimed to increase opportunities for adolescents, especially girls, to actively learn, discuss and express their views on key issues affecting their lives. 
                </p>
                <p class="pt-2">
                    In 2019, UNICEF commissioned a mixed methods study by Empatika and Stats4SD to understand the situation before the programme started and to provide a baseline for a future programme impact assessment. The baseline study included a survey, for which Stats4SD defined the methodology, designed the sampling scheme, developed the ODK questionnaires to be used on mobile devices, created training materials and trained the fieldwork team, provided support and quality assurance throughout the fieldwork, and analysed the data. The report of the study is available here.
                </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'Evaluating a project to improve menstrual health and hygiene in Ethiopia',
                'description' => '
                <p>
                    Stats4SD was part of the evaluation of a three-year project in Ethiopia promoting private sector investment in the provision of Menstrual Health and Hygiene products. The project started in January 2022 and was sponsored by the French Ministry of Europe and Foreign Affairs and the Agence Française de Développement (French Development Agency). It was implemented by an NGO consortium led by CARE France, with pre-financing from the French bank BNP Paribas.
                </p>
                <p class="pt-2">
                    For the evaluation, Stats4SD worked with an advisor from the Burnet Institute in Australia, which has developed measurement tools for menstrual health research including the Menstrual Practice Needs Scale (MPNS). Stats4SD designed and supported baseline, midline and endline surveys using the MPNS ‘needs met’ indicator and indicators designed to assess knowledge and impact on day-to-day activities.
                </p>
                <p class="pt-2">
                    Designing the questionnaire for the survey and collecting the data was straightforward. However, given the political volatility in some of the areas selected to participate in the project, several adaptations to the survey design, sampling scheme and plan of analysis had to be made between the baseline and the endline, and proving a causal link between the intervention and outcomes was challenging. 
                </p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'Assessing a health and empowerment project in Central Asia',
                'description' => '
                <p>
                    Stats4SD is working on an endline assessment for the Aga Khan Foundation (AKF) Canada’s five-year Foundations for Health and Empowerment (F4HE) project. This project promotes equitable development and empowerment for women, girls, adolescents, their families, and communities in targeted regions of Central Asia.
                </p>
                <p class="pt-2">
                    Stats4SD is assessing the effectiveness of two components of the F4HE project that relate to health and to early childhood development. The assessment will use quantitative and qualitative methods to show how much progress has been made by the project and to make evidence-based recommendations to inform the design of future programmes. The qualitative methods will include in-depth interviews and focus group discussions.
                </p>
                <p class="pt-2">
                    Stats4SD is supporting the AKF country teams in Afghanistan, Kyrgyzstan, Pakistan, and Tajikistan with study design and sampling; creating analysis plans to define how indicators will be produced; finalising the data collection tools (some on paper and some digital); preparing data collection guidelines; providing virtual training; creating a platform to capture and store the data; data quality assurance; conducting some statistical analysis; contributing to data interpretation workshops; and writing the endline report.
                </p>',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ]
        ],
        'additionalContent' => [],
        'teamData' => [
            [
                'id' => 'alex_riba',
                'name' => 'Alex Riba',
                'title' => 'Senior Statistician',
                'email' => 'alexriba@stats4sd.org',
                'linkedin' => 'https://linkedin.com/in/alex-riba-11401292',
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
                'id' => 'romina_de_angelis',
                'name' => 'Romina De Angelis',
                'title' => 'Social & Qualitative Research Methods Specialist',
                'email' => 'romina@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?user=_3X8Hg8AAAAJ&hl=en',
                'avatar' => 'images/team/Romina.jpg',
                'long_description' => 'Romina leads Stats4SD’s social and qualitative research work. She provides research methods support to projects of the McKnight Foundation’s Global Collaboration for Resilient Food Systems, works with Farmer Research Networks, and contributes to impact assessments. Her expertise includes qualitative data collection and analysis and using AI for text analysis. She is keen on supporting grassroots organisations to build and communicate evidence on agroecology to their target audiences, and on empowering communities through co-creation and co-learning processes. Romina has a PhD in Education for Sustainable Development, a Postgraduate Diploma in Educational and Social Research from the Institute of Education, University College London, and an MA in Development Studies from the Tata Institute of Social Sciences in India. Before joining Stats4SD, she worked on sustainable development initiatives in India and Jamaica.',
            ],
        ],
    ])
    @endcomponent

@endsection
