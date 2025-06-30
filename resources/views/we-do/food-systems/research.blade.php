@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/agri/farm1.jpg',
        'headerAlt' => 'Agricultural and farmer research page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Agricultural and farmer research"),
        'level2Breadcrumb' => t("Agriculture and food systems"),
        'level2BreadcrumbUrl' => route('we-do.food-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
            Stats4SD’s research methods experts support traditional agricultural research, such as farm experiments. Such research is usually led by the researcher with a mandate from a government or international organisation, and it focuses on increasing production and productivity by addressing agronomy challenges.
        ',
        'content' => '
            <p>
                Stats4SD has many years of experience in providing study design advice in this context. Particularly when experiments are unconventional or take place in challenging environments, we can help researchers to improve significantly the efficiency of their study design and avoid poor, inefficient designs. We can also assist with efficient
                <a href="' . route('we-do.data-systems.collection-management-systems') . '" class="font-bold text-stats4sd-red">data collection and management systems</a>.
            </p>
            <p class="pt-2">
                We are also very much involved in developing ‘farmer research’ methods, which comes out of our work on agroecology. The overarching objective is to find – though research, practice and participation of people – ways of transforming agriculture and food systems to a high-level equilibrium where we can restore stocks of natural assets such as soil, water, nutrients and oxygen, as well as biodiversity, thereby guaranteeing the future of agriculture and food systems. 
            </p>
            <p class="pt-2">
                Stats4SD works on farmer research through its 
                <a href="' . route('we-do.research-methods.design-support') . '#rms-mcknight-crfs' . '" class="font-bold text-stats4sd-red">research methods support work with the McKnight Foundation’s CRFS</a>. In many cases, this involves work with Farmer Research Networks (FRNs), encouraging farmers to contribute to a joint process known as ‘co-creation’ of knowledge. This type of research involves multiple actors and combines scientific methods with local, culturally validated and relevant approaches. Farmers are not just participants in research designed by others, but are involved in the research process at all stages: from its design through data collection to analysis and interpretation of results.
            </p>
            <p class="pt-2">
                Stats4SD has developed:
            </p>
            <ul class="list-disc pl-6">
                <li>
                    A series of training materials for farmer research, such as the 
                    <a href="https://www.youtube.com/playlist?list=PLK5PktXR1tmMlefd36ZQKWCn00F_J5YjX" target="_blank"class="font-bold text-stats4sd-red">Involving Farmers Around the Research Cycle</a> seminars on youtube.
                </li>
                <li>
                    <a href="https://stats4sd.org/frn" target="_blank"class="font-bold text-stats4sd-red">The FRN Research Methods Hub</a> - A library of reference materials, tools and useful information for FRNs, provided by Stats4SD as part of its work on research methods support for CRFS.
                </li>
            </ul>
        ',
        'caseStudies' => [
            [
                'title' => 'FRNs and knowledge co-creation in Malawi',
                'image' => 'images/wedo/agri/casestudies/cocreation.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        Romina De Angelis from Stats4SD and Frank Tchuwa and Daimon Kambewa from the Lilongwe University of Agriculture and Natural Resources made a joint presentation about working with FRNs in Malawi to the 2023 Conference of the UK Education and Development Forum.
                    </p>
                    <p class="pt-2">
                        Farmers in Malawi normally experience the ‘top-down’ model of technology transfer, in which technologies are generated from afar and disseminated by extension workers for farmers to use. If farmers reject the advice, they are called non-adopters or ‘laggers’. 
                    </p>
                    
                ',
                'secondcolumn' => '
                <p class="pt-2">
                        The Best Bets project in Malawi, supported by the McKnight Foundation’s CRFS, is challenging this top-down approach. It is working with FRNs to encourage farmers to do research on their own problems and promoting co-learning and innovation among participants.
                    </p>
                    <p class="pt-2">
                        See full presentation at: 
                        <a href="https://stats4sd.org/resources/farmer-research-networks-in-malawi-as-a-socially-just-model-of-inclusive-knowledge-co-creation_2024-01-15_16:38:47" target="_blank"class="font-bold text-stats4sd-red">Farmer Research Networks in Malawi as a socially just model of inclusive knowledge co-creation</a>.
                    </p>
                    ',
            ],
            [
                'title' => 'Farmer research – an example from Uganda',
                'image' => 'images/wedo/agri/casestudies/ugandatall.png', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                    <p>
                        In February 2020, Stats4SD facilitated a workshop in Soroti, Uganda, to discuss tools for assessment of famers’ agroecology initiatives and to pilot test the 
                        <a href="https://www.fao.org/agroecology/tools-tape/en/#:~:text=TAPE%20can%20also%20be%20used,at%20farm%20and%20territorial%20levels." target="_blank"class="font-bold text-stats4sd-red">Tool for Agroecology Performance Evaluation (TAPE)</a> of the UN Food and Agriculture Organisation (FAO). TAPE sets out to be a multidimensional approach to collecting evidence at farm and community levels using harmonised indicators that produce globally comparable data.
                    </p>
                    <p class="pt-2">
                        The aim of the Soroti workshop was to co-develop research methods for agroecological assessment with farmers and to conduct a pilot study of Step 1 of the TAPE, which aims to produce a characterization of ‘how agroecological’ a food and agricultural system is. 
                    </p>
                ',
                'secondcolumn' => '
                    <p>
                        For more details, see: 
                        <a href="https://online.ucpress.edu/elementa/article/10/1/00022/185022/Grounding-a-global-tool-Principles-and-practice" target="_blank"class="font-bold text-stats4sd-red">Grounding a global tool—Principles and practice for agroecological assessments inspired by TAPE</a>.
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
            [
                'id' => 'romina_de_angelis',
                'name' => 'Romina De Angelis',
                'title' => 'Social & Qualitative Research Methods Specialist',
                'email' => 'romina@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => 'https://scholar.google.com/citations?user=_3X8Hg8AAAAJ&hl=en',
                'avatar' => 'images/team/Romina.jpg',
                'long_description' => 'Romina leads Stats4SD’s social and qualitative research work. She provides research methods support to projects of the McKnight Foundation’s Global Collaboration for Resilient Food Systems, works with Farmer Research Networks, and contributes to impact assessments. Her expertise includes qualitative data collection and analysis and using AI for text analysis. She is keen on supporting grassroots organisations to build and communicate evidence on agroecology to their target audiences, and on empowering communities through co-creation and co-learning processes. Romina has a PhD in Education for Sustainable Development, a Postgraduate Diploma in Educational and Social Research from the Institute of Education, University College London, and an MA in Development Studies from the Tata Institute of Social Sciences in India. Before joining Stats4SD, she worked on sustainable development initiatives in India and Jamaica.',
            ],
        ],
    ])
    @endcomponent

@endsection