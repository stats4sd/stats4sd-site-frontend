@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'AI for analysis page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("AI for analysis"),
        'level2Breadcrumb' => t("Research Methods"),
        'level2BreadcrumbUrl' => route('we-do.research-methods'),
        'content' => '
            <p>
                At Stats4SD we are excited by the opportunities that Artificial Intelligence (AI) offers. We are keen to adopt the new technologies and use Machine Learning (ML) to increase our 
                analytical efficiency. ML is a subset of AI which involves algorithms and statistical models that enable computers to learn from data and produce results without being 
                explicitly programmed. It is very powerful, doing tasks that would take us a lot of time and saving Stats4SD and its clients money. 
            </p>
            <p>
                However, we are also aware of the limitations of AI. When the machines take control, analysis tends to becomes more uniform or ‘average’ because the machines learn 
                from what existed before, so there is a tendency for creativity, richness and nuances to get lost. Also, AI sometimes invents results. 
            </p>
            <p>
                So, we need to make full use of our critical faculties when working with AI. Expecting it to do all the work for you is a bad idea! Instead, our aim at Stats4SD is to use 
                AI in such a way that human intelligence remains in the driving seat. We can do this because we understand both the conventional statistical approaches and what AI can do. 
                We also know what questions to ask and what are the assumptions being made, so we can integrate ML into our work in a way that allows us to understand any biases or data 
                quality issues. AI is very powerful, but the real question is: “How do we integrate the technology into processes that increase efficiency but remain under the control of humans?”
            </p>
            <p>
                At Stats4SD, we are keen to engage with others who are developing applications of AI for similar purposes. We are also happy to advise our clients on the opportunities and 
                limitations, answering questions about ‘what to do’ and ‘what not to do’.  
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'What to think about when proposing to use AI for analysis',
                'description' => '
                    <p>Many people are excited about using AI for analysis, and we often see project and research proposals that say: <em>“we will use AI to do the analysis.”</em></p>
                    <p>At Stats4SD, we believe that AI tools can be hugely beneficial, but we also think people need to be more specific in their proposals about what they intend to do with them.</p>
                    <p>The phrase <em>“we will use AI to do the analysis”</em> is a bit like saying <em>“we will use a statistics package to do the analysis.”</em> If you are thinking carefully about what statistical analysis you plan to do, you should be able to specify the type of program (e.g. R) and the statistical techniques you will use. The same is true when working with AI.</p>
                    <p>Some examples of what you might want to do with AI include:</p>
                    <ul>
                        <li>
                            Doing some initial descriptive exploration of your data. Using the results, along with your prior knowledge of the subject and your research questions, to develop targeted questions that you want to ask about your data. Then sending your data to ChatGPT, asking your questions, and working interactively with the AI chatbot to refine your prompts based on the responses.
                        </li>
                        <li>
                            Taking qualitative data (text), passing it through a model specifically designed to create ‘text embeddings’, then using these embeddings with a second model to find relationships in your data based on the meaning of what was written.
                        </li>
                        <li>
                            Training a Machine Learning (ML) model on subsets of your data and using it to predict other parts of your data (existing results). When you are confident enough in the ML model’s ability to predict in specific situations, using it for inference and prediction.
                        </li>
                    </ul>
                    <p>All these approaches fall under the category of <em>“using AI to do the analysis”</em>, but they are very different. They use different types of tools, provide different types of output, and—crucially—each requires careful thought from the humans involved during the planning and execution of the analysis.</p>
                    <p>For those approaches that involve sending data to ChatGPT or similar AI tools, you need to be aware that the data may be reviewed by OpenAI staff and used for further training of their AI models. This would be inappropriate for data where respondent confidentiality needs to be protected.</p>
                    <p>We encourage researchers and project managers to think carefully about these issues and clearly reflect them in their proposals.</p>
                ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
            [
                'title' => 'Comparing human and artificial intelligence for text analysis',
                'description' => '
                    <p>Two Stats4SD colleagues recently ran an experiment in which they analysed text independently of each other—Carlos Barahona using ChatGPT, and Romina De Angelis using traditional thematic analysis methods. This experiment was discussed in a seminar titled: Using AI for Qualitative Data Analysis.</p>
                    <p>In some respects, the results were similar. For example, the categories and factors highlighted by the two analyses were much the same. The time taken to complete the analysis with ChatGPT was significantly less, making it more efficient.</p>
                    <p>However, a lot of the richness was lost in the AI-driven approach. For instance, Romina reported that interviewees switched to organic and locally produced fertilisers for several reasons: financial, family health, the health of the soil, and cultural appropriateness. ChatGPT, on the other hand, summarised this decision-making as being driven solely by financial considerations—overlooking the complexity of how people actually make decisions.</p>
                    <p>Romina reflected that human critical thinking, and the analytical expertise that can only be developed through experience, helped her to contextualise and interpret the findings. This enabled her to produce results that were fuller and richer than those generated by ChatGPT.</p>
                    <p>Carlos and Romina also considered how the analysis process affected them as researchers. A human being reading through 20 interviews learns as they go, developing a deeper understanding of “the why.” However, if AI does the work, the human researcher misses out on this learning process.</p>
                    <p>They concluded that even if the key points in an AI-led analysis are similar and the cost is lower, we (human beings) still need to carry out traditional qualitative analysis in order to truly understand “the why.”</p>
                    ',
                'image' => 'images/about.webp',
                'imageAlt' => 'Case Study Image',
            ],
        ],
        'additionalContent' => '',
    ])
    @endcomponent

@endsection