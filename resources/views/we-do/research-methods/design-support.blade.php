@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Designing and supporting research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Designing and supporting research"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>The McKnight Foundation’s Global Collaboration for Resilient Food Systems (CRFS) works to ensure a world where all have access to nutritious food that is
                sustainably produced by local people. Local organisations in Africa and South America apply for grants to undertake projects designed to contribute to 
                this goal, and each project has a research component.</p>
            <p>Stats4SD and CRFS share the same goals and values, and we have been working closely together since 2009. The McKnight Foundation recognised early on 
                that its grantees would need research methods support. While some grantees’ projects involve traditional research, others are less conventional, 
                incorporating farmer knowledge, qualitative methods or new approaches. Stats4SD provides the research support, accompanying the grantees through 
                the whole research cycle starting with conceptualisation, then formulation of research questions and hypotheses, followed by selection of methods 
                and then data collection, management and analysis.</p>
            <p>See also:<br>
            <a href="#">Food systems transformation</a><br>
            <a href="#">Agricultural and farmer research</a>
            </p>
        ',
        'caseStudies' => [
            [
            'title' => 'Research methods support for McKnight’s CRFS',
            'description' => '
                <p>
                    The McKnight Foundation’s Global Collaboration for Resilient Food Systems (CRFS) works to ensure a world where all have access to nutritious food that is sustainably produced by local people.
                </p>
                <p>
                    Local organisations in Africa and South America apply for grants to undertake projects designed to contribute to this goal, and each project has a research component.
                </p>
                <p>
                    Stats4SD and CRFS share the same goals and values, and we have been working closely together since 2009. The McKnight Foundation recognised early on that its grantees would need research methods support. While some grantees’ projects involve traditional research, others are less conventional—incorporating farmer knowledge, qualitative methods, or new approaches.
                </p>
                <p>
                    Stats4SD provides the research support, accompanying the grantees through the entire research cycle—starting with conceptualisation, then formulation of research questions and hypotheses, followed by selection of methods and then data collection, management, and analysis.
                </p>
                <p>See also:</p>
                <ul>
                    <li><a href="/food-systems-transformation">Food systems transformation</a></li>
                    <li><a href="/agricultural-and-farmer-research">Agricultural and farmer research</a></li>
                </ul>
            ',
            'image' => 'images/about.webp',
            'imageAlt' => 'Case Study Image',
            ],
            [
            'title' => 'Where should I start?',
            'description' => '
                <p>
                    At Stats4SD, one of the problems we often come across is that researchers set out to collect data without having a clear idea of what they really need to answer their questions. So we have developed a method which challenges the standard sequence of steps.
                </p>
                <p>
                    We propose that when researching in complex contexts, researchers should start with a report (i.e. an outline of their research questions, assumptions, and the detailed results they aim to present) and then work backwards.
                </p>
                <p>
                    This approach avoids collecting data that is not needed, which is inefficient. More importantly, it helps ensure you don’t get to the end of the research process only to discover that you’re missing critical data required to answer your research questions.
                </p>
                <p>
                    For more details, watch the video: <a href="/videos/thinking-in-reverse-order" target="_blank" rel="noopener">Thinking in Reverse Order</a>.
                </p>
            ',
            'image' => 'images/about.webp', 
            'imageAlt' => 'Case Study Image', 
            ]
        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection