@extends('layouts.app')

@section('content')

    @component('components.level-2-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'M&E and impact assessment page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("M&E and impact assessment"),
        'content' => '
            <p>Stats4SD provides support for Monitoring and Evaluation (M&E) and impact assessment of international development programmes. 
                Our support incorporates both quantitative and qualitative aspects. 
            </p>
            <p>On the quantitative side, it may involve advising on survey methods and efficient sampling design, development of data 
                collection instruments, in-country and remote training and support for fieldwork teams, and quality assurance and analysis of results. 
            </p>
            <p>On the qualitative side, in-depth interviews, focus groups discussions or workshops may be helpful. Our analysts are 
                experienced in collecting and analysing qualitative data (text, audio recordings, images etc). We also try to maximise 
                any positive feedback loops between quantitative and qualitative data in our study designs.
            </p>
            <p>Stats4SD’s Data systems and platforms team can also provide end-to-end data collection and management 
                systems for your M&E and impact assessment studies.
            </p>
        ',
        'caseStudy' => [
            'title' => 'Innovative methods for evaluating programmes for migrants returning to the Horn of Africa',
            'description' => '',
            'image' => 'images/about.webp',
            'imageAlt' => 'Case Study Image',
        ],
    ])
    @endcomponent

@endsection
