@extends('layouts.app')

@section('content')

    @component('components.level-3-template', [
        'headerImage' => 'images/wedo/el/blog.jpg',
        'headerAlt' => 'Blogs page',
        'headerSubtitle' => t("What we do"),
        'headerTitle' => t("Blogs"),
        'level2Breadcrumb' => t("E-learning"),
        'level2BreadcrumbUrl' => route('we-do.e-learning'),
        'level1Breadcrumb' => t("What we do"),
        'level1BreadcrumbUrl' => route('we-do'),
        'lead_paragraph' => 'At Stats4SD, we enjoy writing blogs (short articles on topics that we find interesting). We don’t produce blogs on a regular basis because of the pressures of our work - but when we have a bit of spare time, as we did during the Covid-19 pandemic, we like to blog.',
        'content' => '
            Many of our blogs make great e-learning materials. Some illustrate an aspect of our work that want to share with others, some are opinion pieces, and some are just for fun!
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of our blogs',
                'image' => 'images/wedo/el/casestudies/blogs.jpg', 
                'imageAlt' => 'Case Study Image', 
                'description' => '
                <ul class="list-disc pl-6">
                    <li>
                        <a href="' . url('/blog/providing-support-to-projects-that-are-midway-through-the-research-process-project-a') . '" target="_blank" class="font-bold text-stats4sd-red">
                            Providing support to projects that are midway through the research process
                        </a> by Shiphar Mulumba.
                    </li>
                    <li>
                        <a href="' . url('/blog/warming-stripes-a-problem-solving-task-in-r') . '" target="_blank" class="font-bold text-stats4sd-red">
                            Warming Stripes: A problem-solving task in R
                        </a> by Sam Dumble.
                    </li>
                    <li>
                        <a href="' . url('/blog/the-design-of-the-design-of-experiments') . '" target="_blank" class="font-bold text-stats4sd-red">
                            The design of the design of experiments
                        </a> by Ric Coe.
                    </li>
                    <p class="pt-2">
                        And for fun…
                    </p>
                    <li>
                        <a href="' . url('/blog/red-or-white') . '" target="_blank" class="font-bold text-stats4sd-red">
                            Red or White? An Oenological Experimentation into Gustationary Ability to Discern the Pigmentation of Wine when Imbibition is Concealed
                        </a> by Sam Dumble.
                    </li>
                </ul>
                '
            ]
        ],
        'additionalContent' => '
            <p>
                The full collection of Stats4SD blogs can be found 
                <a href="' . route('blog') . '" class="font-bold text-stats4sd-red">here</a>.
            </p>
            <p class="pt-2">
                You can find other e-learning materials in the <a href="https://stats4sd.org/resources" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
            </p>',
        'teamData' => [
            [
                'id' => 'emily_nevitt',
                'name' => 'Emily Nevitt',
                'title' => 'Instructional & Graphic Designer',
                'email' => 'emily@stats4sd.org',
                'linkedin' => '',
                'github' => '',
                'google_scholar' => '',
                'avatar' => 'images/team/Emily.jpg',
                'long_description' => 'Emily’s role focuses on creating effective communication and learning products, as well as providing graphic design and multimedia support for projects. With experience in both education and design, Emily is interested in combining these skills to create products that are attractive, engaging and easy to understand. This involves developing interactive e-learning courses, contributing to the planning of seminars, workshops and other capacity-building events, creating and editing videos, designing websites, graphics and documents and helping maintain and organise the Stats4SD Resources Library.',
            ]
        ],
    ])
    @endcomponent

@endsection