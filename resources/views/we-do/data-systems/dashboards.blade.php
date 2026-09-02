@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/de/dashboard.jpg',
        'headerAlt' => 'Dashboards page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Dashboards"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            The dashboards work at Stats4SD involves building two types of dashboard for our clients: one for managing data collection processes and the other for presenting results or indicators.

            </p>
        <p class="pt-2">
            An example of the first type of dashboard is where there is a household survey running in multiple locations. As a minimum, the dashboard shows you what is going on in each location and highlights problems, such as consistently missing data, to the survey manager – who can then speak to the field staff. More sophisticated versions allow users to manage the whole survey process from start to finish.
        </p>
        ',
        'introcol2' => '
            <p>

                The other type of dashboard is designed to present results or to calculate indicators from a range of data sources. Our statisticians create such dashboards using code in R and graphics in R Shiny. An example is the interactive indicator dashboard for assessing land investments (see below). In such cases, the dashboard might be stand-alone, or it might be part of a data platform. When integrated into a data platform, a dashboard may be used to present results from a survey as the data is collected (in real time) to get an idea of how results are shaping up, as well as to produce indicators from the final dataset.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'The Quality of Life Survey Monitoring Dashboard',
                'image' => 'images/wedo/de/casestudies/qol1.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Stats4SD works with the Quality of Life assessment programme of the Aga Khan Development Network, supporting the Quality of Life team on survey design, implementation using 
                        <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">ODK</a> and analysis of results.
                    </p>
                    <p class="pt-2">
                        In 2021, Stats4SD built a data platform to help the Quality of Life team manage their surveys and bring data from all survey locations into one database. The platform includes a survey monitoring dashboard which allows both the field supervisors and the remote managers to track the progress of the survey from anywhere in the world.                    
                    </p>
                    <p class="pt-2">
                        At the top level, the survey monitoring dashboard provides a summary of progress based on key indicators that are tailored to the requirements of the survey team. It also highlights issues with the submitted data, including submissions where a household could not be identified and cases of duplicate submissions for the same household.
                    </p>
                ',
                 'secondcolumn' => '
                    <p>
                        The data platform also includes dashboards at the levels of district, sub-district, village and household, making it possible to review the survey’s progress at each of these levels. 
                    </p>
                    <p class="pt-2">
                        Users of the dashboard can delete submissions that are incorrect or update a submission to fix the incorrect data. Updates made through the platform are kept in a log, to ensure transparency. The dashboard is updated as soon as survey submissions are sent to the server, so - as long as the field staff (enumerators) can access the internet to upload their submissions regularly - the survey management team can review them and resolve any issues promptly.
                    </p>
                ',
            ],
            [
                'title' => 'Interactive indicator dashboard for assessing land investments',
                'image' => 'images/wedo/de/casestudies/tli.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Center for International Forestry Research and World Agroforestry (CIFOR-ICRAF)’s  
                        <a href="https://tli.cifor-icraf.org/what-are-transformative-land-investments/" target="_blank"class="font-bold text-stats4sd-red">Transformative Land Investments</a> project aims to promote land investments that adhere to agroecological principles and support sustainable food systems. The project includes supporting government officials in African and Asian countries to make better assessments of risk for proposed land investments, using a set of risk and reward indicators.
                    </p>
                    <p class="pt-2">
                        As part of this project, CIFOR-ICRAF and Stats4SD have built an interactive indicator dashboard bringing together a variety of data sources - including geospatial and population census data  - so that the risks and rewards of each proposed land investment can be modelled. The dashboard was built using R and R shiny and has been developed for Ghana, Ethiopia, Mozambique and Laos.
                    </p>
                ',
                 'secondcolumn' => '
                    <p>
                        This dashboard allows users to select a pre-defined geographical area or to draw an area on a map and then select the parameters they want to assess. The output is a report on the environmental risks and the socio-economic risks and rewards of the proposed investment.
                    </p>
                    <p class="pt-2">
                        Users of this dashboard can also alter certain conditions (inputs to the model) to explore whether doing so changes the risk-reward status of a proposal.
                    </p>
                ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['dave_mills', 'sam_dumble']),
    ])
    @endcomponent

@endsection