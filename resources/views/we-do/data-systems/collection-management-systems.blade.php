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
                Stats4SD uses <a href="https://getodk.org/" target="_blank"class="font-bold text-stats4sd-red">ODK</a> as its starting point in most cases. This open-source software allows people to collect data on mobile devices and upload results to a server. ODK forms (questionnaires) can be created from scratch or customised from existing forms. Photos, GPS locations, different languages and other elements can be included. 
            </p>
            <p class="pt-2">
                At Stats4SD, we are experts in using ODK to help our clients collect the data they need. We assist our clients in designing the ODK forms, and for those who need support for building end-to-end data management systems, we add on tailor-made platforms, automated analysis programmes and dashboards. 
            </p>
            <p class="pt-2">
                Stats4SD also has a series of free training materials for ODK in the Introduction to ODK video playlist.
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
                        <a href="https://www.fao.org/agroecology/tools-tape/en" target="_blank"class="font-bold text-stats4sd-red">Tool for Agroecology Performance Evaluation (TAPE)</a> of the UN Food and Agriculture Organisation (FAO). ODK forms were used to collect data in the field with mobile devices and to aggregate the data. 
                    </p>


                    <p class="pt-2">
                        Stats4SD also carried out the statistical analysis for the survey.
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
            [
                'title' => 'Managing data for a pan-African study of the fall armyworm',
                'image' => 'images/wedo/de/casestudies/fallarmyworm1.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        The fall armyworm (Spodoptera frugiperda) is a pest that destroys maize crops. In 2016, it arrived in West Africa and spread rapidly, posing a serious threat to livelihoods. 
                    </p>
                    <p class="pt-2">
                        World Agroforestry (ICRAF) set up a programme of research involving a series of on-farm trials across Africa, including standard treatments and specific local adaptations. ICRAF needed to help each local team design the trial, build a list of treatments, collect the data and send it to the ICRAF team doing the pan-Africa analysis. For this, they needed a data collection system that would allow them to manage the trials in different locations and languages, collect the data and metadata in real time and bring everything together without losing the IDs for each data point. 
                    </p>
                    <p class="pt-2">
                        Stats4SD designed and built a data collection and management system for ICRAF that enabled them to carry out this important work effectively.
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