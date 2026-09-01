@extends('layouts.app')

@section('content')

    @component('components.level-2-template', [
        'headerImage' => 'images/wedo/mande.jpg',
        'headerAlt' => 'M&E and impact assessment page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("M&E and impact assessment"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            Stats4SD provides support for Monitoring and Evaluation (M&E) and impact assessment of international development programmes. 
                Our support incorporates both quantitative and qualitative aspects.
            </p>
            <p class="pt-2">
                On the quantitative side, it may involve advising on survey methods and efficient sampling design, development of data 
                collection instruments, in-country and remote training and support for fieldwork teams, and quality assurance and analysis of results. 

        ',
        'introcol2' => '
            <p>On the qualitative side, participant observations, in-depth interviews, focus groups discussions or workshops may be helpful. Our analysts are 
                experienced in collecting and analysing qualitative data (text, audio recordings, images etc). We also try to maximise 
                any positive feedback loops between quantitative and qualitative data in our study designs.
            </p>
            <p class="pt-2">Stats4SD’s <a href="' . route('we-do.data-systems') . '" class="font-bold text-stats4sd-red">Data systems and platforms</a> team 
                can also provide end-to-end data collection and management systems for your M&E and impact assessment studies.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Innovative methods for evaluating programmes for migrants returning to the Horn of Africa',
                'image' => 'images/wedo/me-cs/impact.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                <p>
                    In 2023 the <a href="https://evaluation.org.uk/" target="_blank"class="font-bold text-stats4sd-red">UK Evaluation Society</a> awarded its Innovation in Methodologies prize, sponsored by Ispos UK, to a consortium led by 
                    <a href="https://www.itad.com/article/ioms-impact-study-wins-innovation-in-methodologies-prize/" target="_blank"class="font-bold text-stats4sd-red">Itad</a> in which Stats4SD provided quantitative evaluation design, analysis and interpretation. The prize was awarded for the 
                    <a href="https://eastandhornofafrica.iom.int/impact-study" target="_blank"class="font-bold text-stats4sd-red">IMPACT Study</a> which evaluated a joint programme of the European Union and the International Organization for Migration (IOM) that assisted migrants to return to Ethiopia, Somalia and Sudan and provided services and grants to foster their successful reintegration. 
                </p>
                <p class="pt-2">
                    On awarding the prize, Ipsos UK highlighted 
                    <a href="https://www.itad.com/article/ioms-impact-study-wins-innovation-in-methodologies-prize/" target="_blank"class="font-bold text-stats4sd-red">three methodological innovations</a> that were contributed to the study by Andrew Pinney from Stats4SD: adopting a calibration group approach to overcome the absence of a clear counterfactual, devising an appropriate snowball sampling strategy, and conducting retrospective baseline data collection at the same time as the endline as a solution to significantly reduced returnee flows at the start of the COVID-19 pandemic.
                </p>
',
                'secondcolumn' => '
                <p>
                    Davide Bruscoli, Regional Information Management Officer for East and Horn of Africa of the IOM, said:
                </p>
                <blockquote class="my-4">
                    “I am glad to say that the study achieved all its objectives and pushed the evaluability frontier to include a topical area (assisted voluntary return and reintegration) of development intervention that was previously left out. 
                    Throughout the evaluation process, the evaluation team, led by Andrew Pinney* and Itad, demonstrated a high level of professionalism, expertise, and dedication.                 The study was conducted in close collaboration with IOM – even, I would say, in a spirit of partnership rather than simple service provision – with Itad and the evaluation team walking several ‘extra miles’.”
                </blockquote>
                <p class="pt-2">
                    * Dr Andrew Pinney, Stats4SD, was quantitative design and technical lead of the IMPACT Study evaluation team.
                </p>
                ',
            ],
            [
                'title' => 'Creating a baseline for Supporting Girls to Thrive',
                'image' => 'images/wedo/me-cs/baselinesupportinggirls.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                <p>
                    In 2018, UNICEF launched the Supporting Girls to Thrive programme in Sorong, West Papua (Indonesia), with support from the David Beckham 7 Fund. The programme aimed to increase opportunities for adolescents, especially girls, to actively learn, discuss and express their views on key issues affecting their lives. 
                </p> ',
                'secondcolumn' => '
                <p>
                    In 2019, UNICEF commissioned a mixed methods study by 
                    <a href="https://www.empatika.org/" target="_blank"class="font-bold text-stats4sd-red">Empatika</a> and Stats4SD to understand the situation before the programme started and to provide a baseline for a future programme impact assessment. The baseline study included a survey, for which Stats4SD defined the methodology, designed the sampling scheme, developed the 
                    <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">ODK</a> questionnaires to be used on mobile devices, created training materials and trained the fieldwork team, provided support and quality assurance throughout the fieldwork, and analysed the data. The report of the study is available 
                    <a href="https://www.unicef.org/indonesia/reports/supporting-girls-thrive-baseline-mixed-methods-study" target="_blank"class="font-bold text-stats4sd-red">here</a>.
                </p>
                ',

            ],
            [
                'title' => 'Evaluating a project to improve menstrual health and hygiene in Ethiopia',
                'image' => 'images/wedo/me-cs/ethiopia.JPG',
                'imageAlt' => 'Case Study Image',
                'description' => '
                <p>
                    Stats4SD was part of the evaluation of 
                    <a href="https://www.afd.fr/en/projects/promoting-private-sector-investment-menstrual-health-and-hygiene-ethiopia" target="_blank"class="font-bold text-stats4sd-red">a three-year project in Ethiopia</a> promoting private sector investment in the provision of menstrual health and hygiene products. The project started in January 2022 and was sponsored by the French Ministry of Europe and Foreign Affairs and the Agence Française de Développement (French Development Agency). It was implemented by an NGO consortium led by CARE France, with pre-financing from the French bank BNP Paribas.
                </p>
                <p class="pt-2">
                    For the evaluation, Stats4SD worked with an advisor from the Burnet Institute in Australia, which has developed measurement tools for menstrual health research including the 
                    <a href="https://mhevidence.au/measures/mpns/" target="_blank"class="font-bold text-stats4sd-red">Menstrual Practice Needs Scale (MPNS)</a>. Stats4SD designed and supported baseline, midline and endline surveys using the MPNS ‘needs met’ indicator and indicators designed to assess knowledge and impact on day-to-day activities.
                </p>

                ',
                 'secondcolumn' => '
                <p>
                    Designing the questionnaire for the survey and collecting the data was straightforward. However, given the political volatility in some of the areas selected to participate in the project, several adaptations to the survey design, sampling scheme and plan of analysis had to be made between the baseline and the endline, and proving a causal link between the intervention and outcomes was challenging. 
                </p>
                ',
            ],
            [
                'title' => 'Assessing a health and empowerment project in Central Asia',
                'image' => 'images/wedo/me-cs/centralasia.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        Stats4SD is working on an endline assessment for the Aga Khan Foundation (AKF) Canada’s five-year 
                        <a href="https://www.akfc.ca/our-work/foundations-for-health-and-empowerment/" target="_blank"class="font-bold text-stats4sd-red">Foundations for Health and Empowerment (F4HE) project</a>, funded by Global Affairs Canada and AKF Canada. This project promotes equitable development and empowerment for women, girls, adolescents, their families, and communities in targeted regions of Central Asia.
                    </p>
                    <p class="pt-2">
                        Stats4SD is assessing the effectiveness of two components of the F4HE project that relate to health and to early childhood development. The assessment will use quantitative and qualitative methods to show how much progress has been made by the project and to make evidence-based recommendations to inform the design of future programmes. The qualitative component will include key informant interviews.
                    </p>',
                'secondcolumn' => '
                    <p>
                        Stats4SD is supporting the AKF country teams in Afghanistan, Kyrgyzstan, Pakistan, and Tajikistan with study design and sampling; finalising the data collection tools (some on paper and some digital); preparing data collection guidelines; providing virtual training; creating a platform to capture and store the data; data quality assurance; analysing data to measure selected outcome indicators; contributing to data interpretation workshops; and writing the endline report.               
                    </p>',
            ]
        ],
        'additionalContent' => [],
        'teamData' => \App\Support\Team::members(['alex_riba', 'sam_dumble', 'romina_de_angelis']),
    ])
    @endcomponent

@endsection
