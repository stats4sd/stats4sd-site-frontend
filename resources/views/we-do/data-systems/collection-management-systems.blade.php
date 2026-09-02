@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/de/datacoll.jpg',
        'headerAlt' => 'Data collection and management systems page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Data collection and management systems"),
        'level2Breadcrumb' => t("Data systems and platforms"),
        'level2BreadcrumbUrl' => route('we-do.data-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
           <p>
            The focus of the data collection and management systems work at Stats4SD is on choosing the right tools and building the systems for digital data collection and management. We support people who want to collect data, for example through household surveys, field experiments or talking to farmers about their practices.
        </p>
        ',
        'introcol2' => '
     <p>Our job is to capture the data, store it sensibly and get it into shape for efficient processing. This includes designing questionnaires and forms for collecting data on a mobile device, as well as building end-to-end systems to manage the data collection (fieldwork) and processing.</p>

        ',
        'intropic' => 'images/wedo/de/odk.png',
        'intropicalt' => 'Diagram of how forms are added to the ODK server, data collection devices download forms and upload data to the server, and collected data can be downloaded from the server.',
        'intropictext' => '

            <p class="font-bold ">
                ODK for data collection
            </p>
            <p class="pt-2">
                Stats4SD uses <a href="https://getodk.org/" target="_blank" class="font-bold text-stats4sd-red">ODK</a> as its starting point in most cases. This open-source software allows people to collect data on mobile devices and upload results to a server. ODK forms (questionnaires) can be created from scratch or customised from existing forms. Photos, GPS locations, different languages and other elements can be included.
            </p>
            <p class="pt-2">
                At Stats4SD, we are experts in using ODK to help our clients collect the data they need. We assist our clients in designing the ODK forms, and for those who need support for building end-to-end data management systems, we add on tailor-made <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">platforms</a>, automated data cleaning and analysis tools and can present results on <a href="' . route('we-do.data-systems.dashboards') . '" class="font-bold text-stats4sd-red">dashboards</a>.
            </p>
            <p class="pt-2">
                Stats4SD also has a series of free training materials for ODK in the <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmM2UYcm_1ZZW_ZhKTBQzpGI" target="_blank"class="font-bold text-stats4sd-red"> Introduction to ODK</a> video playlist.
            </p>
        ',


        'caseStudies' => [
            [
                'title' => 'Providing end-to-end support for ProSoil survey',
                'image' => 'images/wedo/de/casestudies/tape1.png',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p id="prosoil-survey">
                        GIZ, a German government service provider in the field of international development, is implementing
                        <a href="https://www.giz.de/en/worldwide/129677.html" target="_blank" class="font-bold text-stats4sd-red">ProSoil</a>: A Global Soil Conservation and Rehabilitation Programme to Promote Food Security. As part of ProSoil, GIZ ran a survey of 800 farm households in four of the participating countries - Kenya, Ethiopia, Benin and Madagascar - to understand if ProSoil’s activities had had a significant impact on farmers’ adoption of agroecology practices and overall system performance.
                    </p>
                    <p class="pt-2">
                        The starting point for data collection was the
                        <a href="https://www.fao.org/agroecology/Database/tools-tape/en" target="_blank"class="font-bold text-stats4sd-red">Tool for Agroecology Performance Evaluation (TAPE)</a> of the UN Food and Agriculture Organisation (FAO). ODK forms were used to collect data in the field with mobile devices and to aggregate the data.
                    </p>



                ',
                  'secondcolumn' => '
                    <p>
                        Stats4SD provided end-to-end support including platform design, field support, data analysis and report writing. Our role included:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            Helping the survey teams to adapt the TAPE template and ODK forms to their needs, reflecting each country’s context while still being harmonised for cross-country analysis, and adding a module to collect soil samples (a specific requirement of this survey).
                        </li>
                        <li>
                            Building an <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">online platform</a> that the survey teams could use to work on the ODK forms and add local information and translations; and that field staff could use to upload each completed interview from their phones onto the server.
                        </li>
                        <li>
                            Creating <a href="' . route('we-do.data-systems.dashboards') . '" class="font-bold text-stats4sd-red">dashboards</a> that survey managers could use to monitor the survey’s progress in real time.
                        </li>
                        <li>
                            Designing a custom-built <a href="' . route('we-do.data-systems.databases') . '" class="font-bold text-stats4sd-red">database</a> with structures that made it easy to extract analysis-ready data and do cross-country comparisons.
                        </li>
                    </ul>
                    <p class="pt-2">
                        Stats4SD also carried out the <a href="' . route('we-do.research-methods.statistical-analysis') . '" class="font-bold text-stats4sd-red">statistical analysis</a> for the survey.
                    </p>
                ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['dave_mills']),
    ])
    @endcomponent

@endsection
