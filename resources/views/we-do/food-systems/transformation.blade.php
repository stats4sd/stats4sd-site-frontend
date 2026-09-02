@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/agri/food2.jpg',
        'headerAlt' => 'Food systems transformation page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Food systems transformation"),
        'level2Breadcrumb' => t("Agriculture and food systems"),
        'level2BreadcrumbUrl' => route('we-do.food-systems'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'introcol1' => '<p>
            The McKnight Foundation’s <a href="https://www.ccrp.org/" target="_blank" class="font-bold text-stats4sd-red">Global Collaboration for Resilient Food Systems</a> (CRFS) works to ensure a world where all have access to nutritious food that is sustainably produced by local people. Organisations in Africa and South America apply for grants to undertake projects designed to contribute to this goal. CRFS currently works with around 70 teams in 10 countries. </p>
                        <p class="pt-2">
                Stats4SD has been working with CRFS and its predecessor, the Collaborative Crop Research Program, since 2016. Ric Coe and Carlos Barahona have been involved in the program since 2009.
            </p>
        ',
        'introcol2' => '

            <p class="">
                Although our main role in CRFS is research methods support, we are also proud to be members of the CRFS Leadership Team, working with the Program Team and with Regional Team members in South America and Africa to contribute to developing program strategies.
            </p>
            <p class="pt-2">
                To transform food systems, CRFS recognises that it is not enough to work with individual farmers because farmers are impacted by the things around them and in the markets they sell to, which they cannot control. So CRFS is developing initiatives for transforming food systems at ‘landscape level’. This means involving stakeholders in areas such as a river basin or an administrative entity to achieve collective governance of resources and collective action that benefits communities.
            </p>
        ',
        'caseStudies' => [
            [
                'title' => 'Research for CRFS’s landscape level initiatives',
                'image' => 'images/wedo/agri/casestudies/landscape1.png', 
                'imageAlt' => 'Case Study Image', 
                'imagecaption'=> 'Landscape mapping exercise',
                 'image2' => 'images/wedo/agri/casestudies/landscape2.png', 
                'image2Alt' => 'Case Study Image', 
                'image2caption'=> 'Using the visioning tool – how do you see your landscape in 10 years’ time? ',
                'description' => '
                    <p>
                        Stats4SD is supporting CRFS’s landscape level work by developing methods for the research components of these projects.
                    </p>
                    <p>
                        Traditional agricultural research methods focus on individual farm plots and tackle questions relating to agronomy. For example, they might look at the effect of compost on maize yields, taking a plot experiment with a thousand farmers. But if you want to find out about the big picture (beyond farm level), or about how human behaviour and interactions affect outcomes, there are no established research methods. Stats4SD is pioneering innovative research methods at the ‘landscape level’, helping communities to do good research for collective action.
                    </p>
                '
            ],
        ],
        'additionalContent' => '',
        'teamData' => \App\Support\Team::members(['ric_coe', 'carlos_barahona']),
    ])
    @endcomponent

@endsection