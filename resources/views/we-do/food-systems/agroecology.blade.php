@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/agri/agroecology.jpg',
        'headerAlt' => 'Agroecology page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Agroecology"),
        'level2Breadcrumb' => t("Agriculture and food systems"),
        'level2BreadcrumbUrl' => route('we-do.food-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
        <p>
            Stats4SD is committed to the <a href="https://www.fao.org/agroecology/overview/en/" target="_blank" class="font-bold text-stats4sd-red">principles of agroecology</a>. 
            It does not believe that agriculture and food production should be about extracting reserves from nature and replacing them in an unbalanced manner, leading to a low-level equilibrium that depends on fossil fuels. Instead, we believe that the world needs to find ways of transforming farming systems to become sustainable, creating a high-level equilibrium where stocks of natural assets are restored. 
           </p>
            <p class="pt-2">
                We support this work by contributing to efforts to change the way that people do research. We aim to create better research processes and outcomes for agroecology practitioners, including farmers and other stakeholders. We are also involved in initiatives to share knowledge and provide appropriate data systems and platforms for this work. 
            </p>
        ',
        'introcol2' => '
            <p>
                We work closely with the following organisations:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    The McKnight Foundation’s CRFS, which believes that the principles of agroecology are the basis for its work to build globally resilient food systems. 
                    <a href="https://www.ccrp.org/how-we-work/agroecological-intensification/" target="_blank" class="font-bold text-stats4sd-red">Agroecology is central</a> to the work of CRFS project grantees and communities of practice in supporting the livelihoods of smallholder and indigenous farmers in Africa and South America.
                </li>
                <li>
                    The <a href="https://www.agroecologytpp.org/about/" target="_blank" class="font-bold text-stats4sd-red">Agroecology TPP</a> (Transformative Partnership Platform), hosted by Center for International Forestry Research and World Agroforestry (CIFOR-ICRAF), which aims to coordinate work on agroecology between institutions and add value with innovative initiatives and projects. Knowledge sharing is central to its vision. 
                </li>
                <li>
                    The <a href="https://agroecology-coalition.org/principles-and-vision/" target="_blank" class="font-bold text-stats4sd-red">Agroecology Coalition</a>, which is a ‘coalition of the willing’, comprising around 380 members committed to transforming food systems through agroecology. Research, co-creation and sharing of knowledge, advocacy and engagement are central to its approach.
                </li>
                <li>
                    The <a href="https://agroecologyfund.org/who-we-are/" target="_blank" class="font-bold text-stats4sd-red">Agroecology Fund</a>, which aims to amplify agroecological solutions by providing grant funding to grassroots organisations, encouraging donors to support agroecology projects and providing a learning platform for donors, advisers and grantees.
                </li>
            </ul>
        ',
        'caseStudies' => [
            [
                'title' => 'Innovation in research methods for agroecology',
                'image' => 'images/wedo/agri/casestudies/agroecology.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Stats4SD is actively involved in supporting its partners to think about appropriate and innovative research methods for agroecology. Some examples of the work we are doing are:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            Working with the McKnight Foundation’s CRFS and with Farmer Research Networks (FRNs) on 
                            <a href="' . route('we-do.food-systems.research') . '" class="font-bold text-stats4sd-red">co-creation of agroecology research methods with farmers</a>.
                        </li>
                        <li>
                            Creating a database and platform of around 8,000 food and agriculture system ‘metrics’ for the Agroecology TPP, and developing guidelines for integrated system assessments.
                        </li>

                    </ul>
                ',
                'secondcolumn' => '
                    <ul class="list-disc pl-6">
                        <li>
                            Creating an <a href="' . route('we-do.research-methods.indicators') . '#agroecology-finance-assessment-tool' . '" class="font-bold text-stats4sd-red">agroecology finance assessment tool</a> for the Agroecology Coalition to enable institutions to evaluate their funding initiatives in terms of how much they support agroecological transformations.
                        </li>
                        <li>
                            Working with the Grassroots Evidence for Agroecology (GEA) Initiative of the Agroecology Fund to support local organisations’ efforts to build and communicate 
                            <a href="' . route('we-do.research-methods.qualitative-research') . '#evidence-for-agroecology' . '" class="font-bold text-stats4sd-red">evidence for agroecology</a> to their target audiences and demonstrate their impact. 
                        </li>
                    </ul>
                
                ',
            ]

        ],
        'additionalContent' => '',
        'teamData' => [
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
        ],
    ])
    @endcomponent

@endsection