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
        'lead_paragraph' => '
                Stats4SD creates online courses relating to its areas of work and expertise. Some are taught courses, while others use a self-learning approach. Our courses are delivered on the <a href="https://courses.stats4sd.org/?redirect=0" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Moodle site</a> or on the websites of those who commissioned them. 
        ',
        'content' => '
            <p>
                To access the Stats4SD Moodle site you have to register, but registration is free. Once you have access, you can enrol for courses, track your progress and obtain certificates. 
            </p>
            <p class="pt-2">
                We tailor our approach depending on the project. This can mean developing content by drawing on the knowledge within the Stats4SD team or by collaborating with external partners. It can involve multiple different formats of course delivery, including videos, interactive e-learning activities, webinars and interactive workbooks. 
            </p>
            <p class="pt-2">
                Our team is skilled at creating effective learning experiences from complex information. We have many years of experience – both at Stats4SD and previously at the University of Reading – with adapting courses to a range of audiences, accessibility needs, specific user requirements and technical specifications.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of the courses we have created',
                'image' => 'images/wedo/el/casestudies/courses.png', 
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
            You can find courses and other e-learning materials in the <a href="https://stats4sd.org/resources" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
        ',
        'teamData' => [
            [
                'id' => 'emily_nevitt',
                'name' => 'Emily Nevitt',
                'title' => 'Instructional & Graphic Designer',
                'email' => 'emily@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => '',
                'avatar' => 'images/team/Emily.jpg',
                'long_description' => 'Emily’s role focuses on creating effective communication and learning products, as well as providing graphic design and multimedia support for projects. With experience in both education and design, Emily is interested in combining these skills to create products that are attractive, engaging and easy to understand. This involves developing interactive e-learning courses, contributing to the planning of seminars, workshops and other capacity-building events, creating and editing videos, designing websites, graphics and documents and helping maintain and organise the Stats4SD Resources Library.',
            ]
        ],

    ])
    @endcomponent

@endsection