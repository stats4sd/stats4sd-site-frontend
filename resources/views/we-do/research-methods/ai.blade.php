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
                At Stats4SD we are excited by the opportunities that Artificial Intelligence (AI) offers. We are keen to adopt the new technologies and use Machine Learning (ML) to increase our analytical efficiency. 
                </p>
             <p class="pt-2">
                ML is a subset of AI which involves algorithms and statistical models that enable computers to learn from data and produce results without being explicitly programmed. It is very powerful, doing tasks that would take us a lot of time and saving Stats4SD and its clients money.
            </p>
            <p class="pt-2">
                However, we are also aware of the limitations of AI. When the machines take control, analysis tends to becomes more uniform or ‘average’ because the machines learn from what existed before, so there is a tendency for creativity, richness and nuances to get lost. Also, AI sometimes invents results. 
            </p>',
        'introcol2' => '

            <p>
                So, we need to make full use of our critical faculties when working with AI. Expecting it to do all the work for you is a bad idea! Instead, our aim at Stats4SD is to use AI in such a way that human intelligence remains in the driving seat. We can do this because we understand both the conventional statistical approaches and what AI can do. We also know what questions to ask and what are the assumptions being made, so we can integrate ML into our work in a way that allows us to understand any biases or data quality issues. AI is very powerful, but the real question is: “How do we integrate the technology into processes that increase efficiency but remain under the control of humans?”
            </p>
            <p class="pt-2">
                At Stats4SD, we are keen to engage with others who are developing applications of AI for similar purposes. We are also happy to advise our clients on the opportunities and limitations, answering questions about ‘what to do’ and ‘what not to do’.  
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'What to think about when proposing to use AI for analysis',
                'redtitle' => 'Insight',
                'image' => 'images/wedo/rm/casestudies/aian.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        Many people are excited about using AI for analysis, and we often see project and research proposals that say: “we will use AI to do the analysis”. At Stats4SD we believe that AI tools can be hugely beneficial, but we also think people need to be more specific in their proposals about what they intend to do with them.
                    </p>
                    <p class="pt-2">
                        The phrase “we will use AI to do the analysis” is a bit like saying “we will use a statistics package to do the analysis”. If you are thinking carefully about what statistical analysis you plan to do, you should be able to specify the type of program (e.g. R) and statistical techniques you will use. The same is true if you are working with AI.
                    </p>
                    <p class="pt-2">
                        Some examples of what you might want to do with AI are:
                    </p>
                    <ul class="list-disc pl-6">
                        <li>
                            Doing some initial descriptive exploration of your data. Using the results, along with your prior knowledge of the subject and your research questions, to develop targeted questions that you want to ask about your data. Then sending your data to ChatGPT, asking your questions and working interactively with the AI chat bot to refine your prompts based on the responses.
                        </li>
                        <li>
                            Taking qualitative data (text), passing it through a model specifically designed to create ‘text embeddings’, then using these embeddings with a second model to find relationships in your data based on the meaning of what was written. 
                        </li>
                        <li>
                            Training a Machine Learning (ML) model on sub-sets of your data and using it to predict other parts of your data (existing results). When you are confident enough in the ML model’s ability to predict in specific situations, using it for inference and prediction.
                        </li>
                    </ul>
                    <p class="pt-2">
                        All these approaches fall under the heading “using AI to do the analysis”, but they are very different. They use different types of tools, provide different types of output and, crucially, they each require careful thought from the humans involved during the planning and execution of the analysis. For those that involve sending data to ChatGPT or similar AI tools, you need to be aware that the data will be reviewed by OpenAI staff and used for further training of their AI models, which would be inappropriate for data where 
                        <a href="' . route('we-do.research-methods.ethics') . '" class="font-bold text-stats4sd-red">respondent confidentiality</a> needs to be protected. 
                    </p>
                    <p class="pt-2">
                        We encourage researchers and project managers to think carefully about such things and reflect them in their proposals.
                    </p>
                ',
            ],
            [
                'title' => 'Comparing human and artificial intelligence for text analysis',
                'image' => 'images/wedo/rm/casestudies/aitext.jpg',
                'imageAlt' => 'Case Study Image',
                'description' => '
                    <p>
                        Two Stats4SD colleagues recently ran an experiment in which they analysed text independently of each other, Carlos Barahona using ChatGPT and Romina De Angelis using traditional thematic analysis methods. This experiment was discussed in a seminar: 
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