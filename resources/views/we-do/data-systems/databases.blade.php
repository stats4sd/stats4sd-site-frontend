@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/de/database.jpg',
        'headerAlt' => 'Databases and platforms page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Databases and platforms"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            Stats4SD builds databases designed specifically for our clients’ projects, with structures that make it easy to extract analysis-ready data, accessible via online platforms with user-friendly front ends.
            </p>
            <p class="pt-2">
            The aim of this work is to get to the point where there is a clean, organised dataset in a sensible format that is ready for analysis and that can be easily accessed via the online platform.
            </p>
        ',
        'introcol2' => '
            <p>
                 Some clients may also request built-in data processing, with automated analysis such as calculating indicators and basic summaries. The front end of the platform may have an integrated 
                <a href="' . route('we-do.data-systems.dashboards') . '" class="font-bold text-stats4sd-red">dashboard</a> to present results in real-time. 
            </p>
            <p class="pt-2">    
                We use a human-centred design approach to build intuitive and clear tools so that even non-technical teams can manage their data collection and management processes effectively.
            </p>

        ',
         'intropic' => 'images/wedo/de/databases.png',
        'intropicalt' => 'Diagram showing the connection and flow of data from ODK data collection, the ODK Central server, a data platform, automated analysis and dashboards.',
        'intropictext' => '
        
            <p class="">
                An example of the complete package is shown in the graphic below. We use and recommend the Open Data Kit (ODK) for surveys and field experiments, and we can deploy a fully customised and isolated ODK server for your project to ensure your data remains secure and private. We can also co-develop the data collection forms with you, advising on survey content as well as providing technical expertise. Our custom web platform then imports the data from ODK, combines it with data from other sources if required, and provides a fully automated data cleaning and analysis service. What you get is a web-based interface to monitor the data collection, a set of cleaned data exports and a dashboard showing initial results, all fully tailored to your needs.
            </p>
        ',

        'caseStudies' => [
            [
                'title' => 'Building an online data platform for an Agroecology TPP project',
                'image' => 'images/wedo/rm/casestudies/tpp.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Stats4SD provided 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">data collection and management</a>, 
                        <a href="' . route('we-do.research-methods.statistical-analysis') . '" class="font-bold text-stats4sd-red">statistical analysis</a> and 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">data platforms support</a> for one of the first big initiatives of the Agroecology TPP: a study of the socio-economic viability of agroecology practices across Africa. This was launched in 2022 and involved 12 teams working in 9 African countries. 
                    </p>    
                    <p class="pt-2">
                       We provided a data platform to enable all teams to bring the data they collected across different research activities (Key Informant Interviews, Farm Surveys, Focus Group Discussions) into a central location.
                    </p>
                ',
                'secondcolumn' => '
                    <p>
                        Each team worked to the same common research protocol and used the same set of ODK 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">data collection tools</a>, so the results were comparable between locations. But each team had specific local requirements, so the platform was designed to allow team-specific customisations of research activities and tools.
                    </p>
                    <p class="pt-2">
                        The platform ensured that each team had access to only their own data and that teams could perform their own 
                        <a href="' . route('we-do.research-methods.statistical-analysis') . '" class="font-bold text-stats4sd-red">analyses</a>, supported by Stats4SD and the central research team. It also acted as a hub, allowing teams to upload other information helpful for their research activities for storage and sharing within the team. 
                    </p>
                ',
            ],
            [
                'title' => 'The HOLPA web-based data collection and management platform',
                'image' => 'images/wedo/de/casestudies/holpa.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        The Holistic Localized Performance Assessment for Agroecology (HOLPA) tool collects evidence of the holistic impact of agroecology. It was developed as part of the Transformative Agroecology Initiative of the Consortium of International Agricultural Research Centers (CGIAR).
                    </p>
                    <p class="pt-2">
                        Stats4SD designed a web-based platform to guide survey teams through the process of setting up and implementing a HOLPA survey, including adapting it to local requirements and languages. This is web-based platform is known as the 
                        <a href="https://holpa.org/" target="_blank"class="font-bold text-stats4sd-red">HOLPA Online Tool</a>.
                    </p>

                ',
                'secondcolumn' => '
                    <p>
                        The HOLPA Online Tool uses ODK as its starting point. It enables survey teams to prepare for data collection, collect and aggregate data in real time; to manage survey processes; and to quality assure, store and analyse the data, with the help of an R server which runs automated R scripts to check for errors and calculate indicators. 
                    </p>
                    <p class="pt-2">
                        The platform provides a secure environment in which harmonised results from multiple data collection initiatives can be compared and shared. It also enables the maintenance and sharing of the HOLPA tool by a central research team.
                    </p>
                ',
            ],

        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['dave_mills']),
    ])
    @endcomponent

@endsection