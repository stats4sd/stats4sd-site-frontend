@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/el/elearning.jpg',
        'headerAlt' => 'Courses page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Courses"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
                Stats4SD creates online courses relating to its areas of work and expertise. Some are taught courses, while others use a self-learning approach. Our courses are delivered on the <a href="https://courses.stats4sd.org/?redirect=0" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Moodle site</a> or on the websites of those who commissioned them. 

            </p>
            <p class="pt-2">
                To access the Stats4SD Moodle site you have to register, but registration is free. Once you have access, you can enrol for courses, track your progress and obtain certificates. 
                </p>
        ',
        'introcol2' => '
            <p>
 
                We tailor our approach depending on the project. This can mean developing content by drawing on the knowledge within the Stats4SD team or by collaborating with external partners. It can involve multiple different formats of course delivery, including videos, interactive e-learning activities, webinars and interactive workbooks. 
            </p>
            <p class="pt-2">
                Our team is skilled at creating effective learning experiences from complex information. We have many years of experience – both at Stats4SD and previously at the University of Reading – with adapting courses to a range of audiences, accessibility needs, specific user requirements and technical specifications.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of the courses we have created',
                'image' => 'images/wedo/el/casestudies/courses1.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <ul class="list-disc pl-6">
                        <li>
                            <a href="https://www.ecampus.iom.int/login/index.php" target="_blank"class="font-bold text-stats4sd-red">Impact Evaluations for Return and Reintegration Programmes</a> – a course on the International Organization for Migration (IOM) United Nations (UN) Migration e-campus.
                        </li>
                        <li>
                            <a href="https://courses.stats4sd.org/enrol/index.php?id=23" target="_blank"class="font-bold text-stats4sd-red">Grassroots Evidence for Agroecology</a> (with the Agroecology Fund) – a course on the Stats4SD Moodle site, designed to help grassroots organisations prepare evidence-based cases advocating for agroecology.
                        </li>
                        <li>
                            <a href="https://courses.stats4sd.org/enrol/index.php?id=30" target="_blank"class="font-bold text-stats4sd-red">(Re)Introduction to Statistics - Envision 2025</a> – on the Stats4SD Moodle site, designed to provide an overview of common statistical methods and concepts used within environmental sciences.
                        </li>
                        <li>
                            <a href="https://courses.stats4sd.org/enrol/index.php?id=21" target="_blank"class="font-bold text-stats4sd-red">Introduction to R and RStudio</a> – on the Stats4SD Moodle site.
                        </li>
                        <li>
                            <a href="https://discoverda.org/" target="_blank"class="font-bold text-stats4sd-red">Dare to discover data assimilation</a> (with the University of Reading, UK) – an introduction to the concepts of data assimilation without assuming a background in mathematical concepts or specialist subject knowledge.
                        </li>
                    </ul>
                '
            ]
        ],
        'additionalContent' => '
            You can find courses and other e-learning materials in the <a href="' . config('app.resources_site_url') . '" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
        ',
        'teamData' => [
            [
                'id' => 'alex_riba',
                'name' => 'Alex Riba',
                'title' => 'Operations Director and Senior Statistician',
                'email' => 'alexriba@stats4sd.org',
                'linkedin' => 'https://linkedin.com/in/alex-riba-11401292',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?view_op=new_articles&hl=ca&imq=Alex+Riba#',
                'avatar' => 'images/team/AlexR.jpg',
                'long_description' => 'Alex leads our work on Monitoring and Evaluation (M&E), impact assessment and the development of indices. He is also an expert in surveys and statistical analysis. He has over 25 years of experience in research, research methods and teaching statistics. At Stats4SD, Alex has worked with projects in areas such as food and agriculture, international development, health and nutrition, education, and climate change. For quantitative studies, his expertise guides the process from the design stage to the reporting of results, as he supports areas such as survey design, sampling, digital data collection, creation of analysis plans and complex statistical analysis. Alex has a PhD in Statistics and an MSc in Humanities. Before joining Stats4SD, he worked for the Universitat Politecnica de Catalunya, Barcelona Tech, and for the University of Reading.',
            ],
        ],

    ])
    @endcomponent

@endsection