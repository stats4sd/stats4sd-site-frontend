@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/qual.png',
        'headerAlt' => 'Qualitative research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Qualitative research"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            Although Stats4SD was founded by quantitative data specialists, we recognise the importance of qualitative data in research processes. Our team includes qualitative methods specialists who:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    Contribute to projects of our clients where a qualitative research element is needed, such as in our 
                    <a href="' . route('we-do.m-and-e') . '#aga-khan-foundation' . '" class="font-bold text-stats4sd-red">endline assessment for the Aga Khan Foundation Canada</a>.
                </li>
                <li>
                    Conducting qualitative research and write up the results as reports, for example: 
                    <a href="https://www.slowfood.com/wp-content/uploads/2023/10/Funded-project_Agroecology-in-kenya-e-Uganda_2019-2022.pdf" target="_blank"class="font-bold text-stats4sd-red">An Overview of the Slow Food Programmes: Presidia, Food Gardens and Earth Markets in Kenya and Uganda</a>.
                </li>

            </ul>
        ',
        'introcol2' => '     
            
            <ul class="list-disc pl-6 !mt-0">

                <li class="!mt-0">
                    Support CRFS project grantees and students in Africa and South America in writing up their research findings and publishing them in scientific journals, so that they can contribute to global debates.
                </li>
                <li>
                    Support the Agroecology Fund’s work with grassroots organisations on building evidence-based cases for agroecology (see below).
                </li>
                <li>
                    Create training materials for qualitative data collection and analysis such as Stats4SD’s videos on 
                    <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmN1ife2PcM3B17r6jFmE5NX" target="_blank"class="font-bold text-stats4sd-red">Qualitative Data Management</a> and Qualitative Data Analysis, and practical guidance for practitioners on 
                    <a href="https://stats4sd.org/resources/participant-observation-parctical-guide-for-practitioners_2023-09-05_13:50:27" target="_blank"class="font-bold text-stats4sd-red">Participant Observation</a>.
                </li>
            </ul>
        ',
        'caseStudies' => [
            [
                'title' => 'Building evidence-based cases for agroecology',
                'image' => 'images/wedo/rm/casestudies/aeftall.JPG',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p id="evidence-for-agroecology">
                        The Agroecology Fund partnered with Stats4SD in 2020 to launch the Grassroots Evidence for Agroecology (GEA) Initiative. Under this initiative, Stats4SD supported the Agroecology Fund by:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            Developing and pilot testing a methodology and process to support grassroots organisations’ efforts to build and communicate evidence to their target audiences and demonstrate their impact (see 
                            <a href="https://agroecologyfund.org/wp-content/uploads/2024/11/GEA_Report_20241022-1-compressed.pdf" target="_blank"class="font-bold text-stats4sd-red">Grassroots Evidence for Agroecology – Pilot Report May 2024</a>).
                        </li>
                        <li>
                            Creating a GEA online course that is free and available in English, French and Spanish – see video introduction 
                            <a href="https://agroecologyfund.org/wp-content/uploads/2024/11/GEA_Report_20241022-1-compressed.pdf" target="_blank"class="font-bold text-stats4sd-red">here</a>.
                        </li>

                    </ul>

                ',
                 'secondcolumn' => '                    
                      <ul class="list-disc pl-6">
                        <li>
                            Building an <a href="https://evidence4agroecology.org/home" target="_blank"class="font-bold text-stats4sd-red">online catalogue</a> to share cases and evidence from the GEA initiative. The catalogue was launched in February 2025 with the 13 cases from the pilot study. It will grow as other cases are developed by grassroots organisations.
                        </li>
                    </ul>
                    <p>
                        The qualitative research team at Stats4SD was central to this work, helping organisations to build coherent cases and compelling arguments for agroecology based on a framework and a logical argument. The cases aim to influence farmers, communities, donors, policymakers, researchers and consumers – key actors in the transformation of food systems.
                    </p>
                 
                 ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => [
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
            ]
        ]
    ])
    @endcomponent

@endsection