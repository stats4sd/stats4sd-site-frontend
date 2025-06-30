@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/design.jpg',
        'headerAlt' => 'Designing and supporting research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Designing and supporting research"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
        <blockquote class=" pt-2">
                “If you are building a hut, you don’t need an architect. But if you are building a complex building you need blueprints and someone who knows how to bring it all together. That’s what we do”. 
            </blockquote>
            <p class="pt-4 italic">
                Carlos Barahona, Stats4SD Managing Director
            </p>
           
        ',
        'content' => ' <p>We support research processes by advising on efficient research approaches, methods and designs and on what are the most appropriate choices in each case.</p>
            <p>
                We are experts in ‘research architecture’ – the design of complex research processes involving, for example, quantitative data collected through large-scale surveys, agricultural experiments or qualitative data from interviews, focus groups and participatory processes.
            </p>
            
            <p class="pt-2">
                Including research methods specialists from the start of a project can save money, particularly when working in challenging environments. Stats4SD’s advice on research design and its support during the research process ensures that our partners and clients obtain the information they need in the most efficient way.
            </p>
            <p class="pt-2">
                We have also developed many courses and videos about research methods. See our <a href="' . route('we-do.e-learning') . '" class="font-bold text-stats4sd-red">e-learning</a> pages for details.
            </p>
        ',
        'caseStudies' => [
            [
            'title' => 'Research methods support for McKnight’s CRFS',
            'description' => '
                <p id="rms-mcknight-crfs">
                    The McKnight Foundation’s <a href="https://www.ccrp.org/" target="_blank" class="font-bold text-stats4sd-red">Global Collaboration for Resilient Food Systems</a> (CRFS) works to ensure a world where all have access to nutritious food that is sustainably produced by local people.
                </p>
                <p class="pt-2">
                    Local organisations in Africa and South America apply for grants to undertake projects designed to contribute to this goal, and each project has a research component.
                </p>
                <p class="pt-2">
                    Stats4SD and CRFS share the same goals and values, and we have been working closely together since 2009. The McKnight Foundation recognised early on that its grantees would need research methods support. While some grantees’ projects involve traditional research, others are less conventional—incorporating farmer knowledge, qualitative methods, or new approaches.
                </p>


            ',
            'secondcolumn' => '
                            <p class="pt-2">
                    Stats4SD provides the research support, accompanying the grantees through the entire research cycle—starting with conceptualisation, then formulation of research questions and hypotheses, followed by selection of methods and then data collection, management, and analysis.
                </p>
                            <p class="pt-2">See also:</p>
                <ul list-disc pl-6>
                    <li><a href="' . route('we-do.food-systems.transformation') . '" class="font-bold text-stats4sd-red">Food systems transformation</a></li>
                    <li><a href="' . route('we-do.food-systems.research') . '" class="font-bold text-stats4sd-red">Agricultural and farmer research</a></li>
                </ul>
                ',
            'image' => 'images/wedo/rm/crfstall.jpg',
            'imageAlt' => 'Case Study Image',
            'imgstretch' => '1',
            ],
            [
            'title' => 'Where should I start?',
            'description' => '
                <p>
                    At Stats4SD, one of the problems we often come across is that researchers set out to collect data without having a clear idea of what they really need to answer their questions. So we have developed a method which challenges the standard sequence of steps.
                </p>
                <p class="pt-2">
                    We propose that when researching in complex contexts, researchers should start with a report (i.e. an outline of their research questions, assumptions, and the detailed results they aim to present) and then work backwards.
                </p>


            ',
            'secondcolumn' => '
                            <p class="pt-2">
                    This approach avoids collecting data that is not needed, which is inefficient. More importantly, it helps ensure you don’t get to the end of the research process only to discover that you’re missing critical data required to answer your research questions.
                </p>
                                           <p class="pt-2">
                    For more details, watch the video: <a href="https://www.youtube.com/watch?v=Xo861guv04Y" target="_blank" class="font-bold text-stats4sd-red">Thinking in Reverse Order</a>.
                </p>
                ',
            'image' => 'images/wedo/rm/where.jpg', 
            'imgstretch' => '1',
            'imageAlt' => 'Case Study Image', 
            ]
        ],
        'additionalContent' => '',
        'teamData' => [
            [
                'id' => 'carlos_barahona',
                'name' => 'Carlos Barahona',
                'title' => 'Managing Director',
                'email' => 'carlos@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?user=tH_rckIAAAAJ&hl=en',
                'avatar' => 'images/team/Carlos.jpg',
                'long_description' => 'Carlos leads Stats4SD and advises partners and clients on complex research design and robust methodologies in the context of sustainable development. With over 30 years’ experience, Carlos specialises in quantitative methods, participatory action research and mixed methods. He is passionate about transdisciplinary research that combines scientific rigour with local knowledge. He works on empowering communities to produce and use evidence to guide change, with a focus on knowledge co-creation to support agroecology, farmer research and food systems transformation. He is part of the leadership team of the McKnight Foundation’s Global Collaboration for Resilient Food Systems (CRFS). Before founding Stats4SD in 2016, he worked for 21 years at the Statistical Services Centre, University of Reading.',
            ],
            [
                'id' => 'ric_coe',
                'name' => 'Richard (Ric) Coe',
                'title' => 'Adviser - Research Methods',
                'email' => 'r.coe@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?user=KunP2l0AAAAJ',
                'avatar' => 'images/team/Ric.png',
                'long_description' => 'Ric advises our project teams, partners and clients on designing and planning research, mainly in sub-Saharan Africa. He has many years of experience in supporting research relating to food, agriculture and the natural environment, with a focus on agroforestry and agroecology. He is an expert in experimental design, farmer-centred research, systems approaches and assessment. Ric has been part of the research methods support programme for the McKnight Foundation’s Global Collaboration for Resilient Food Systems (CRFS) since 2009, and is a member of the CRFS leadership team. Before working with Stats4SD, Ric was a lecturer in applied statistics at the University of Reading. He also works with CIFOR-ICRAF (World Agroforestry Centre), supporting research teams with methods.',
            ],
        ],
    ])
    @endcomponent

@endsection