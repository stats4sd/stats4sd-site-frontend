@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Webinars page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Webinars"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Our webinars relate to our work on 
            <a href="' . route('we-do.research-methods.design-support') . '" class="font-bold text-stats4sd-red">research methods support</a> for the McKnight Foundation’s Global Collaboration for Resilient Food Systems (CRFS) and provide the opportunity for discussion and sharing of knowledge and experiences. Recently we have begun to do multi-language webinars, where presentations are made in English, French and Spanish language channels simultaneously.
        ',
        'content' => '
            <p>
                The presentations are available in the <a href="https://stats4sd.org/resources" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>. 
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of the presentations we have created',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <ul class="list-disc pl-6">
                        <li>
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmNwrFaFB1AeRe27cJxPEXG1" target="_blank"class="font-bold text-stats4sd-red">Research Methods Seminar Series</a>, a series of webinars for the research methods support programme of CRFS, covering what you should consider in the research process, from developing your research question to handling your results.
                        </li>
                        <li>
                            <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmN1ife2PcM3B17r6jFmE5NX" target="_blank"class="font-bold text-stats4sd-red">Qualitative Data Management Webinars</a>, discussing the practical aspects of research with qualitative data, including transcripts and coding procedures.
                        </li>
                    </ul>
                '
            ]
        ],
        'additionalContent' => '
            <p>
                Stats4SD webinars and seminars can be found on the <a href="https://www.youtube.com/@Stats4SD" target="_blank"class="font-bold text-stats4sd-red">Stats4SD YouTube channel</a>.
            </p>
            <p>
                You can find other e-learning materials in the <a href="https://stats4sd.org/resources" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
            </p>',
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