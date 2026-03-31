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
        'introcol1' => 'At Stats4SD, we enjoy writing blog posts (short articles on topics that we find interesting). We don’t produce blog posts on a regular basis because of the pressures of our work - but when we have a bit of spare time, as we did during the Covid-19 pandemic, we like to blog.',
        'introcol2' => '
           Many of our blog posts make great e-learning materials. Some illustrate an aspect of our work that want to share with others, some are opinion pieces, and some are just for fun!
        ',
        'caseStudies' => [
            [
                'title' => 'Examples of our blog posts',
                'image' => 'images/wedo/el/casestudies/blogs.png', 
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
                The full collection of Stats4SD blog posts can be found 
                <a href="' . route('blog') . '" class="font-bold text-stats4sd-red">here</a>.
            </p>
            <p class="pt-2">
                You can find other e-learning materials in the <a href="' . config('app.resources_site_url') . '" target="_blank"class="font-bold text-stats4sd-red">Stats4SD Resources Library</a>.
            </p>',
        'teamData' => [
            [
                'id' => 'dave_mills',
                'name' => 'Dave Mills',
                'title' => 'Managing Director and Senior Data Engineer',
                'email' => 'd.e.mills@stats4sd.org',
                'linkedin' => 'https://www.linkedin.com/in/dave-mills-ssd',
                'github' => 'https://github.com/dave-mills',
                'google_scholar' => '',
                'avatar' => 'images/team/Dave.jpg',
                'long_description' => 'Dave leads Stats4SD’s data systems and platforms team, providing robust technical solutions to support complex data management challenges. He specialises in database management, web design, and building data collection tools with ODK to support large-scale data collection efforts. He has over a decade of experience working with large and small projects. In his work, Dave is keen on promoting the careful and considered use of technology to support the work of our partners and provides both technical expertise and an understanding of when and how technology can be brought in to improve efficiency and quality.',
            ]
        ],
    ])
    @endcomponent

@endsection