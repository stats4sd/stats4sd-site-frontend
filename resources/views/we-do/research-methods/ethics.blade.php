@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Research ethics and responsible data handling page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Research ethics and responsible data handling"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => 'At Stats4SD, we are committed to upholding high ethical standards and managing data responsibly in all our research projects',
        'content' => '
            <p>
                Through informed consent, confidentiality protection, and robust data security measures, we ensure that the rights and privacy of participants are respected throughout the research process.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Research ethics',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        An ethical approach is essential when doing research with human beings. In some countries and organisations, research ethics are strictly defined - in others, less so. At Stats4SD we are committed to upholding high ethical standards everywhere. This includes ethical research principles such as prior informed consent and security of personal data.
                    </p>
                ',
            ],
            [
                'title' => 'Data handling',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Responsible data management is all about treating the data that we collect with respect and managing the rights of people who provide information (respondents). We scrutinise the entire project lifecycle to check that we are handling data responsibly and as carefully as we can be.
                    </p>
                    <p class="pt-2">
                         This includes:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            Clearly defining the purpose of the project and the data we will be collecting.
                        </li>
                        <li>
                            Assessing risk and taking any actions that may be needed on data security and to protect confidentiality of respondents.
                        </li>
                        <li>
                            Ensuring that field staff (enumerators) fully understand the process of obtaining informed consent from interviewees.
                        </li>
                        <li>
                            Ensuring that the necessary steps are taken to safely and securely store, access and share our data, e.g. through the use of encrypted files and passwords.
                        </li>
                        <li>
                            Retaining only necessary data, and for the appropriate time; otherwise, it is safely deleted and disposed of.
                        </li>
                    </ul>
                ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => [
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
            ]
        ]
    ])
    @endcomponent

@endsection