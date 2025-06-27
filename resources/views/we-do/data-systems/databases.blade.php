@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Databases and platforms page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Databases and platforms"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Stats4SD builds databases that are designed specifically for our clients’ projects, with structures that make it easy to extract analysis-ready data, accessible via online platforms with user-friendly front ends.
        ',
        'content' => '
            <p>
                The aim of this work is to get to the point where there is a clean, organised dataset in a sensible format that is ready for analysis by an analyst in the client’s organisation and that can be easily accessed via the online platform. Some clients may also request built-in data processing and custom scripts (in R) to do automated analysis such as calculating indicators and basic summaries. The front end of the platform may have an integrated dashboard. It may also be set up so that non-technical teams can manage their data collection and management processes – including field staff – effectively.
            </p>
            <p class="pt-2">
                Such a system is shown in the graphic below. The departure point is the ODK tools that we use for data collection (left-hand side of graphic). Stats4SD deploys the ODK Central server and co-develops the data collection forms. If you are looking for an end-to-end data management system, we can also design a data platform, automated analysis and dashboards to suit your project’s needs (right-hand side of graphic).
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Building an online data platform for an Agroecology TPP project',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Stats4SD provided data collection and management, statistical analysis and data platforms support for one of the first big initiatives of the Agroecology TPP: a study of the socio-economic viability of agroecology practices across Africa. This was launched in 2022 and involved 12 teams working in 9 African countries. 
                    </p>    
                    <p class="pt-2">
                        We provided a data platform to enable all teams to bring their data collected across different research activities (Key Informant Interviews, Farm Surveys, Focus Group Discussions) into a central location.
                    </p>

                ',
                'secondcolumn' => '
                    
                    <p class="">
                        Each team worked to the same common research protocol and used the same set of ODK data collection tools, so the results were comparable between locations. But each team had specific local requirements, so the platform was designed to allow team-specific customisations of research activities and tools.
                    </p>
                    <p class="pt-2">
                        The platform ensured that each team had access to only their own data and that teams could perform their own analyses, supported by Stats4SD and the central research team. It also acted as a hub, allowing teams to upload other information helpful for their research activities for storage and sharing within the team. 
                    </p>
                ',
            ],
            [
                'title' => 'The HOLPA web-based data collection and management platform',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        The Holistic Localized Performance Assessment for Agroecology (HOLPA) tool collects evidence of the holistic impact of agroecology. It was developed as part of the Transformative Agroecology Initiative of the Consortium of International Agricultural Research Centers (CGIAR).
                    </p>
                    <p class="pt-2">
                        Stats4SD is developing a web-based platform to guide survey teams through the process of setting up and implementing a HOLPA survey, including adapting it to local requirements and languages. This is web-based platform is known as the HOLPA Online Tool.
                    </p>

                ',
                'secondcolumn' => '

                    <p class="">
                        The HOLPA Online Tool uses ODK software as its starting point. It enables survey teams to prepare for data collection, collect and aggregate data in real time; to manage survey processes; to access the survey data and other relevant information such as secondary data and qualitative research findings; and to quality assure, store and analyse the data, with the help of an R server which runs automated R scripts to check for errors and calculate indicators. 
                    </p>
                    <p class="pt-2">
                        The platform provides a secure environment in which harmonised results from multiple data collection initiatives can be compared and shared. It also enables the maintenance and sharing of the HOLPA tool.
                    </p>
                ',
            ],

        ],
        'additionalContent' => '',
        'teamData' => [
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
        ],
    ])
    @endcomponent

@endsection