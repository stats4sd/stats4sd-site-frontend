@extends('layouts.app')

@section('content')

    @component('components.level-2-template', [
        'headerImage' => 'images/wedo/sustain.JPG',
        'headerAlt' => 'Sustainable Development page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Sustainable development"),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            Stats4SD is committed to supporting sustainable development around the world using data and analysis to inform policies and actions.
            We help people collect and organise information to solve real-world problems for the benefit of society and the environment.
        </p>
         <p class="pt-2">
            We support projects in areas ranging from <a href="' . route('we-do.food-systems.transformation') . '" class="font-bold text-stats4sd-red">food systems transformation</a> and <a href="' . route('we-do.food-systems.agroecology') . '" class="font-bold text-stats4sd-red">agroecology</a> to promoting women’s health, supporting education and understanding the challenges of displaced people. While we are familiar with many of these areas, we are not specialists in any of them. 
                Our role, as experts in data and methods support, is to empower you to <a href="' . route('we-do.research-methods') . '" class="font-bold text-stats4sd-red">answer your research questions efficiently</a>, <a href="' . route('we-do.data-systems') . '" class="font-bold text-stats4sd-red">organise your information</a>, 
                <a href="' . route('we-do.research-methods.surveys') . '" class="font-bold text-stats4sd-red">produce reliable results</a> and <a href="' . route('we-do.research-methods.indicators') . '" class="font-bold text-stats4sd-red">present them clearly to your audiences</a>.</p>
        ',
        'introcol2' => '
           
            <p class="">The Stats4SD team understands the constraints of collecting, processing and analysing data in low-resource and politically 
            challenging environments. We have a strong track record of helping people to find innovative solutions for their data and information needs.</p>
            <p class="pt-2">Our aim is to support research that feeds into actions and outcomes that promote sustainable development by empowering organisations 
            to achieve their goals. Sometimes this goes beyond answering the original research question.</p>
        ',
        'caseStudies' => [
            [
                'title' => 'Going the extra mile for the FSC',
                'redtitle' => '',
                'description' => 'The <a href="https://uk.fsc.org/" target="_blank" class="font-bold text-stats4sd-red">Forest Stewardship Council (FSC)</a> is a world leader in sustainable forestry.
                    It recently asked Stats4SD to assess two complex statistical models it was using – a Machine Learning model and a hierarchical Bayesian regression – 
                    to find out which of the two models worked better. After completing the initial piece of work, we found that neither model worked well. ',
                'secondcolumn' => '
                    As we wanted to help the FSC in its work on sustainable forestry, we not only answered the original question but decided to develop a new model 
                    that was better suited to their needs.',
                'image' => 'images/wedo/fsc.jpg',
                'imageAlt' => 'Case Study Image',
            ]
        ],
        'additionalContent' => '
            <p>We also have a programme of <a href="' . route('we-do.e-learning') . '" class="font-bold text-stats4sd-red">e-learning</a> and a set of 
                <a href="' . route('we-do.e-learning.resources-library') . '" class="font-bold text-stats4sd-red">open-source tools</a> to help you improve your data collection, processing and analysis skills in the context of sustainable development.</p>
            <p>You can find out more about our philosophy and principles <a href="' . route('about') . '" class="font-bold text-stats4sd-red">here</a>.</p>
        ',
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
