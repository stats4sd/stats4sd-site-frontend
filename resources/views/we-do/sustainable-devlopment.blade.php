@extends('layouts.app')

@section('content')

    @component('components.level-2-template', [
        'headerImage' => 'images/we-do.jpg',
        'headerAlt' => 'Sustainable Development page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Sustainable development"),
        'content' => '
            <p>Stats4SD is committed to supporting sustainable development around the world using reliable data and analysis to inform policies and actions.
            We help people collect and organise information to solve real-world problems for the benefit of society and the environment.</p>
            <p>We support projects in areas ranging from food systems transformation and agroecology to promoting women’s health, supporting education and 
            understanding the challenges of displaced people. While we are familiar with many of these areas, we are not specialists in any of them. 
            Our role, as experts in data and methods support, is to empower you to answer your research questions efficiently, organise your information, 
            produce reliable results and present them clearly to your audiences.</p>
            <p>The Stats4SD team understands the constraints of collecting, processing and analysing data in low-resource and politically 
            challenging environments. We have a strong track record of helping people to find innovative solutions for their data and information needs.</p>
            <p>Our aim is to support research that feeds into actions and outcomes that promote sustainable development by empowering organisations 
            to achieve their goals. Sometimes this goes beyond answering the original research question.</p>
        ',
        'caseStudy' => [
            'title' => 'Going the extra mile for the FSC',
            'description' => 'The Forest Stewardship Council (FSC) is a world leader in sustainable forestry.
                It recently asked Stats4SD to assess two complex statistical models it was using – a Machine Learning model and a hierarchical Bayesian regression – 
                to find out which of the two models worked better. After completing the initial piece of work, we found that neither model worked well. 
                As we wanted to help the FSC in its work on sustainable forestry, we not only answered the original question but decided to develop a new model 
                that was better suited to their needs.',
            'image' => 'images/about.webp',
            'imageAlt' => 'Case Study Image',
        ],
        'additionalContent' => '
            <p>We also have a programme of e-learning and a set of open-source tools to help you improve your data collection, 
                processing and analysis skills in the context of sustainable development.</p>
            <p>You can find out more about our philosophy and principles here.</p>
        ',
    ])
    @endcomponent

@endsection
