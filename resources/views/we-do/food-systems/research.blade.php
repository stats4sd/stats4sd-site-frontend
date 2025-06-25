@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Agricultural and farmer research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Agricultural and farmer research"),
        'level2Breadcrumb' => t("Agriculture and food systems"),
        'level2BreadcrumbUrl' => route('we-do.food-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Stats4SD’s research methods experts support traditional agricultural research, such as farm experiments. Such research is usually led by the researcher with a mandate from a government or international organisation, and it focuses on increasing production and productivity by addressing agronomy challenges. Stats4SD has many years of experience in providing study design advice in this context. Particularly when experiments are unconventional or take place in challenging environments, we can help researchers to improve significantly the efficiency of their study design and avoid poor, inefficient designs. We can also assist with efficient data collection and management systems.
        ',
        'content' => '
            <p>
                We are also very much involved in developing ‘farmer research’ methods, which comes out of our work on agroecology. The overarching objective is to find – though research, practice and participation of people – ways of transforming agriculture and food systems to a high-level equilibrium where we can restore stocks of natural assets such as soil, water, nutrients and oxygen, as well as biodiversity, thereby guaranteeing the future of agriculture and food systems. 
            </p>
            <p class="pt-2">
                Stats4SD works on farmer research through its research methods support work with the McKnight Foundation’s CRFS. In many cases, this involves work with Farmer Research Networks (FRNs), encouraging farmers to contribute to a joint process known as ‘co-creation’ of knowledge. This type of research involves multiple actors and combines scientific methods with local, culturally validated and relevant approaches. Farmers are not just participants in research designed by others, but are involved in the research process at all stages: from its design through data collection to analysis and interpretation of results.
            </p>
            <p class="pt-2">
                Stats4SD has developed:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    A series of training materials for farmer research, such as the Involving Farmers Around the Research Cycle seminars on youtube.
                </li>
                <li>
                    The FRN Research Methods Hub - A library of reference materials, tools and useful information for FRNs, provided by Stats4SD as part of its work on research methods support for CRFS.
                </li>
            </ul>
        ',
        'caseStudies' => [
            [
                'title' => 'FRNs and knowledge co-creation in Malawi',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Romina De Angelis from Stats4SD and Frank Tchuwa and Daimon Kambewa from the Lilongwe University of Agriculture and Natural Resources made a joint presentation about working with FRNs in Malawi to the 2023 Conference of the UK Education and Development Forum.
                    </p>
                    <p class="pt-2">
                        Farmers in Malawi normally experience the ‘top-down’ model of technology transfer, in which technologies are generated from afar and disseminated by extension workers for farmers to use. If farmers reject the advice, they are called non-adopters or ‘laggers’. 
                    </p>
                    <p class="pt-2">
                        The Best Bets project in Malawi, supported by the McKnight Foundation’s CRFS, is challenging this top-down approach. It is working with FRNs to encourage farmers to do research on their own problems and promoting co-learning and innovation among participants.
                    </p>
                    <p class="pt-2">
                        See full presentation at: Farmer Research Networks in Malawi as a socially just model of inclusive knowledge co-creation.
                    </p>
                ',
            ],
            [
                'title' => 'Farmer research – an example from Uganda',
                'image' => 'images/about.webp', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        In February 2020, Stats4SD facilitated a workshop in Soroti, Uganda, to discuss tools for assessment of famers’ agroecology initiatives and to pilot test the Tool for Agroecology Performance Evaluation (TAPE) of the UN Food and Agriculture Organisation (FAO). TAPE sets out to be a multidimensional approach to collecting evidence at farm and community levels using harmonised indicators that produce globally comparable data.
                    </p>
                    <p class="pt-2">
                        The aim of the Soroti workshop was to co-develop research methods for agroecological assessment with farmers and to conduct a pilot study of Step 1 of the TAPE, which aims to produce a characterization of ‘how agroecological’ a food and agricultural system is. 
                    </p>
                    <p class="pt-2">
                        For more details, see: Grounding a global tool—Principles and practice for agroecological assessments inspired by TAPE
                    </p>

                ',
            ],
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