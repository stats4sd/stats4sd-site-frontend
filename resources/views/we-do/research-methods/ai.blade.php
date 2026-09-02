@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/rm/ai.jpg',
        'headerAlt' => 'AI for analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("AI for analysis"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '
            <p>
                As knowledge workers, AI is impossible to ignore. The potential benefits of carefully considered use are huge, though the risks of thoughtless application are high. At Stats4SD, we consider it our job to understand both and support our partners and clients to get the best value out of the emerging AI tools while avoiding the trap of handing over too much control.  
            </p>',
        'introcol2' => '
            <p>
                So, we need to make full use of our critical faculties when working with AI. Expecting it to do all the work for you is a bad idea! Instead, our aim at Stats4SD is to use AI in such a way that human intelligence remains in the driving seat. We can do this because we understand both the conventional statistical approaches and what AI can do. We also know what questions to ask and what are the assumptions being made, so we can integrate the tools into our work in a way that allows us to understand any biases or data quality issues. AI is very powerful, but the real question is: “How do we integrate the technology into processes that increase efficiency but remain under the control of humans?”
            </p>
            <p class="pt-2">
                At Stats4SD, we are keen to engage with others who are developing applications of AI for similar purposes. We are also happy to advise our clients on the opportunities and limitations, answering questions about ‘what to do’ and ‘what not to do’.  
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Comparing human and artificial intelligence for text analysis',
                'image' => 'images/wedo/rm/casestudies/aitext.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        In 2025, two Stats4SD colleagues ran an experiment in which they analysed text independently of each other, Carlos Barahona using ChatGPT and Romina De Angelis using traditional thematic analysis methods. This experiment was discussed in a seminar: 
                        <a href="https://www.youtube.com/watch?v=-0uAK5KSM0Y" target="_blank"class="font-bold text-stats4sd-red">Using AI for Qualitative Data Analysis</a>.
                    </p>
                    <p class="pt-2">
                        In some respects, the results were similar – for example, the categories and factors highlighted by the two analyses were much the same. The time taken to do the ChatGPT analysis was much less, making it more efficient. But a lot of the richness was lost. For example, Romina reported interviewees switching to organic and locally produced fertilisers for several reasons: financial, families’ health, the health of the soil, and cultural appropriateness. ChatGPT simply said that such decisions were driven by financial considerations - the complexities of how people really make decisions was lost. 
                    </p>

                 ',
                 'secondcolumn' => '
                    <p>
                        Romina reflected that human critical thinking and the analytical expertise that can only be developed through experience helped her to contextualise and interpret the findings. This enabled her to produce results that were fuller and richer than those of ChatGPT.
                    </p>
                    <p class="pt-2">
                        Carlos and Romina also considered how the process affected them as researchers: a human being reading through 20 interviews learns as they go and develops an understanding of ‘the why’; but if AI does the work the human researcher does not benefit from this learning process. They concluded that even if the key points of the analysis by ChatGPT are similar and the cost is lower, we (human beings) also need to do some of the traditional analysis so that we understand ‘the why’.
                    </p>
                 ',
            ],
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['carlos_barahona', 'dave_mills', 'sam_dumble', 'romina_de_angelis']),
    ])
    @endcomponent

@endsection