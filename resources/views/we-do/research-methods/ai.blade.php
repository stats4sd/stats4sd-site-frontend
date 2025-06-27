@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'AI for analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("AI for analysis"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => '
                At Stats4SD we are excited by the opportunities that Artificial Intelligence (AI) offers. We are keen to adopt the new technologies and use Machine Learning (ML) to increase our analytical efficiency. ',
        'content' => '
            <p>
                ML is a subset of AI which involves algorithms and statistical models that enable computers to learn from data and produce results without being explicitly programmed. It is very powerful, doing tasks that would take us a lot of time and saving Stats4SD and its clients money.
            </p>
            <p>
                However, we are also aware of the limitations of AI. When the machines take control, analysis tends to becomes more uniform or ‘average’ because the machines learn from what existed before, so there is a tendency for creativity, richness and nuances to get lost. Also, AI sometimes invents results. 
            </p>
            <p class="pt-2">
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
                'image' => 'images/about.webp',
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
                        All these approaches fall under the category of “using AI to do the analysis”, but they are very different. They use different types of tools, provide different types of output and, crucially, they each require careful thought from the humans involved during the planning and execution of the analysis. For those that involve sending data to ChatGPT or similar AI tools, you need to be aware that the data will be reviewed by OpenAI staff and used for further training of their AI models, which would be inappropriate for data where 
                        <a href="' . route('we-do.research-methods.ethics') . '" class="font-bold text-stats4sd-red">respondent confidentiality</a> needs to be protected. 
                    </p>
                    <p class="pt-2">
                        We encourage researchers and project managers to think carefully about such things and reflect them in their proposals.
                    </p>
                ',
            ],
            [
                'title' => 'Comparing human and artificial intelligence for text analysis',
                'image' => 'images/about.webp',
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
                                     <p class="pt-2">
                        Romina reflected that human critical thinking and the analytical expertise that can only be developed through experience helped her to contextualise and interpret the findings. This enabled her to produce results that were fuller and richer than those of ChatGPT.
                    </p>
                    <p class="pt-2">
                        Carlos and Romina also considered how the process affected them as researchers: a human being reading through 20 interviews learns as they go and develops an understanding of ‘the why’; but if AI does the work the human researcher does not benefit from this learning process. They concluded that even if the key points of the analysis by ChatGPT are similar and the cost is lower, we (human beings) also need to do some of the traditional analysis so that we understand ‘the why’.
                    </p>
                 ',
            ],
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
                'id' => 'dave_mills',
                'name' => 'Dave Mills',
                'title' => 'Senior Data Engineer',
                'email' => 'd.e.mills@stats4sd.org',
                'linkedin' => 'https://www.linkedin.com/in/dave-mills-ssd',
                'github' => 'https://github.com/dave-mills',
                'google_scholar' => '',
                'avatar' => 'images/team/Dave.jpg',
                'long_description' => 'Dave leads Stats4SD’s data systems and platforms team, providing robust technical solutions to support complex data management challenges. He specialises in database management, web design, and building data collection tools with ODK to support large-scale data collection efforts. He has over a decade of experience working with large and small projects. In his work, Dave is keen on promoting the careful and considered use of technology to support the work of our partners and provides both technical expertise and an understanding of when and how technology can be brought in to improve efficiency and quality.',
            ],
            [
                'id' => 'sam_dumble',
                'name' => 'Sam Dumble',
                'title' => 'Senior Statistician',
                'email' => 's.dumble@stats4sd.org',
                'linkedin' => '',
                'github' => 'https://github.com/sdumble1',
                'google_scholar' => '',
                'avatar' => 'images/team/Sam.jpg',
                'long_description' => 'Sam has over 15 years’ experience in supporting the design, implementation and analysis of quantitative research including surveys and Monitoring and Evaluation (M&E) programmes. His role is to ensure that designs address the research questions, methodological choices are robust and results are communicated clearly – for example using indicators, data visualisations and dashboards. He is also involved in developing courses and other e-learning materials for those trying to improve their skills with statistics and data handling, and is particularly interested in the use of R to ensure reproducible and robust analysis of data. Sam has an MSc in Statistics with Applications in Medicine from the University of Southampton. Before joining Stats4SD, he worked in the medical industry and at the University of Reading.',
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