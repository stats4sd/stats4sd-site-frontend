@extends('layouts.app')

@section('content')
    <!-- Header section -->

    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
            <div class="text-2xl md:text-3xl font-bold uppercase text-stats4sd-red ">
                What we do
            </div>

            <div class="text-5xl md:text-6xl font-bold pt-2">
                Research ethics and responsible data handling
            </div>
        </div>
    </div>
    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4  mx-auto">

        <nav class="py-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600 flex-col sm:flex-row">
                <li class="hidden sm:block">
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                </li>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">
                    <a href="{{ url('/we-do') }}" class="hover:underline">What we do</a>
                </li>

                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">
                    <a href="{{ url('/we-do/research-methods') }}" class="hover:underline">Research Methods</a>
                </li>
                <li class="block sm:hidden">
                    <a href="{{ url('/we-do/research-methods') }}" class="hover:underline">
                        < Back to Research Methods</a>
                </li>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">Research ethics and responsible data handling</li>
            </ol>
        </nav>

    </div>




    <!-- Header Image and content -->
    <div class="w-full h-64 md:h-80 lg:h-96  ">
        <img src="{{ url('images/wedo/rm/ethics.jpg') }}" alt="Header Image" class=" w-full h-full object-cover">
    </div>
    <div class="w-full  ">
        <!-- Content -->
        <div
            class=" -mt-40 mx-auto relative z-40 w-[90%] max-w-7xl bg-white px-12 lg:px-16 xl:px-20 pt-12 lg:pt-16 xl:pt-20">
            <div class="flex flex-col md:flex-row gap-12 2xl:gap-20">
                <!-- Lead Paragraph -->
                <div class="md:w-1/2">
                    <p class="text-xl md:text-xl font-semibold">
                        At Stats4SD, we are committed to upholding high ethical standards and managing data responsibly in
                        all our research projects
                    </p>
                    <div class="bg-stats4sd-red w-20 mt-16  h-3"></div>
                </div>

                <!-- Content -->
                <div class="md:w-1/2 ">
                    <p>
                        Through informed consent, confidentiality protection, and robust data security measures, we ensure
                        that the rights and privacy of participants are respected throughout the research process.

                    </p>
                </div>
            </div>
            <div class="w-full  bg-white py-10 ">
                <h2 class="text-stats4sd-red text-2xl font-bold uppercase mb-4">
                    Research ethics
                </h2>
                <p>
                    An ethical approach is essential when doing research with human beings. In some countries and
                    organisations, research ethics are strictly defined - in others, less so. At Stats4SD we are
                    committed to upholding high ethical standards everywhere. This includes ethical research principles
                    such as prior informed consent and security of personal data.
                </p>

            </div>
            <div class="w-full  bg-white  ">
                <h2 class="text-stats4sd-red text-2xl font-bold uppercase mb-4">
                    Data handling
                </h2>
                <p>
                    Responsible data management is all about treating the data that we collect with respect and
                    managing
                    the rights of people who provide information (respondents). We scrutinise the entire project
                    lifecycle to check that we are handling data responsibly and as carefully as we can be.
                </p>
                <p class="pt-2">
                    This includes:
                </p>
                <ul class="list-disc pl-6">
                    <li>
                        Clearly defining the purpose of the project and the data we will be collecting.
                    </li>
                    <li>
                        Assessing risk and taking any actions that may be needed on data security and to protect
                        confidentiality of respondents.
                    </li>
                    <li>
                        Ensuring that field staff (enumerators) fully understand the process of obtaining informed
                        consent from interviewees.
                    </li>
                    <li>
                        Ensuring that the necessary steps are taken to safely and securely store, access and share
                        our
                        data, e.g. through the use of encrypted files and passwords.
                    </li>
                    <li>
                        Retaining only necessary data, and for the appropriate time; otherwise, it is safely deleted
                        and
                        disposed of.
                    </li>
                </ul>
            </div>

        </div>
    </div>


    <section class="bg-white pt-10 pb-20 px-6 md:px-20">

        <!-- Get in Touch -->
        <div class="w-full mx-auto  max-w-7xl bg-white px-12 lg:px-16 xl:px-20 ">
            <h2 class="text-stats4sd-red text-2xl font-bold uppercase mb-4">
                {{ t('Get in Touch') }}
            </h2>
            <p>
                {{ t('To learn more about how we can help you, please contact:') }}
            </p>

            <div class="flex flex-wrap gap-6 pt-6">

                <div class=" w-50 cursor-pointer mx-auto sm:mx-0" x-data="{ open: false }">
                    <div @click="open = true" class="overflow-hidden rounded-3xl hover-effect">
                        <img src="{{ url('images/team/Jane.jpg') }}" alt="Jane Poole"
                            class="w-full h-60 object-cover rounded-xl">
                    </div>
                    <div class="mt-2 text-left">
                        <h4 class="text-gray-900 text-lg font-semibold">Jane Poole</h4>
                        <p class="text-gray-700 text-sm">Research Methods Specialist</p>
                    </div>

                    <!-- Modal  -->

                    <div x-show="open" x-cloak
                        class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.9)]">
                        <div @click.away="open = false"
                            class="bg-white shadow-xl max-w-6xl w-full mx-12 sm:mx-28 md:mx-12 relative overflow-y-auto max-h-[90vh]">

                            <!-- Modal Content -->
                            <div class="flex flex-col md:flex-row gap-6">

                                <!-- Photo -->
                                <div
                                    class="md:flex-shrink-0 md:min-h-full h-[50vh] md:h-auto overflow-hidden  w-full md:w-90">
                                    <img src="{{ url('images/team/Jane.jpg') }}" alt="Jane Poole"
                                        class="object-cover min-h-full  rounded-none">
                                </div>

                                <!-- Name, Title, Description & contact -->
                                <div class="flex flex-col w-full md:py-12">
                                    <!-- Name & Title with red border -->
                                    <div>
                                        <div class="flex-1 flex flex-col  border-r-12 border-stats4sd-red ml-8 pr-8">
                                            <h2 class="text-3xl font-bold">Jane Poole</h2>
                                            <p class="text-stats4sd-red uppercase text-xl font-semibold mt-1">
                                                Research Methods Specialist
                                            </p>
                                        </div>
                                    </div>
                                    <!-- description and contact -->
                                    <div class="flex flex-col xl:flex-row gap-12 items-start mx-8 mt-8">
                                        <!-- description -->
                                        <div class="flex-initial xl:w-7/12">
                                            <p class="text-sm ">
                                                Jane heads Stats4SD's research methods team in East Africa, which aims
                                                to
                                                embed high-quality methods into research and development programmes in
                                                the
                                                region. She specializes in integrating into projects robust research
                                                methods
                                                - from study design and sampling to development of data collection
                                                tools,
                                                analysis and presentation - to enhance their rigour and results. She has
                                                over 25 years of experience supporting multi-disciplinary research and
                                                development initiatives in areas such as forestry and agroforestry,
                                                plant
                                                health, livestock (breeding, nutrition, and health), and livelihoods.
                                                Her
                                                expertise also covers key thematic areas including gender equity,
                                                monitoring
                                                and evaluation (M&E) and impact assessment. She has significant
                                                experience
                                                and interest in all aspects of research ethics including prior informed
                                                consent and data protection.
                                            </p>
                                        </div>

                                        <!-- Contact -->
                                        <div class="xl:w-5/12 flex flex-col text-sm">
                                            <div class="h-2 w-12 bg-stats4sd-red mb-3 xl:hidden"></div>
                                            <span class="text-lg font-bold mb-4">{{ t('Contact') }}</span>

                                            <!-- Email -->
                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 24 24" class="flex-shrink-0">
                                                    <path
                                                        d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z" />
                                                </svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">Email</span>
                                                    <a href="mailto:j.poole@stats4sd.org"
                                                        class="text-stats4sd-red break-words">
                                                        j.poole@stats4sd.org
                                                    </a>
                                                </div>
                                            </div>


                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                    <path
                                                        d="M390.9 298.5c0 0 0 .1 .1 .1c9.2 19.4 14.4 41.1 14.4 64C405.3 445.1 338.5 512 256 512s-149.3-66.9-149.3-149.3c0-22.9 5.2-44.6 14.4-64h0c1.7-3.6 3.6-7.2 5.6-10.7c4.4-7.6 9.4-14.7 15-21.3c27.4-32.6 68.5-53.3 114.4-53.3c33.6 0 64.6 11.1 89.6 29.9c9.1 6.9 17.4 14.7 24.8 23.5c5.6 6.6 10.6 13.8 15 21.3c2 3.4 3.8 7 5.5 10.5zm26.4-18.8c-30.1-58.4-91-98.4-161.3-98.4s-131.2 40-161.3 98.4L0 202.7 256 0 512 202.7l-94.7 77.1z" />
                                                </svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">Google Scholar</span>
                                                    <a href="https://scholar.google.com/citations?user=d67lv4MAAAAJ"
                                                        target="_blank" class="text-stats4sd-red break-words">
                                                        View profile
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                {{-- Dave --}}


                <div class=" w-50 cursor-pointer mx-auto sm:mx-0" x-data="{ open: false }">
                    <div @click="open = true" class="overflow-hidden rounded-3xl hover-effect">
                        <img src="{{ url('images/team/Dave.jpg') }}" alt="Jane Poole"
                            class="w-full h-60 object-cover rounded-xl">
                    </div>
                    <div class="mt-2 text-left">
                        <h4 class="text-gray-900 text-lg font-semibold">Dave Mills</h4>
                        <p class="text-gray-700 text-sm">Senior Data Engineer</p>
                    </div>

                    <!-- Modal  -->

                    <div x-show="open" x-cloak
                        class="fixed inset-0 z-50 flex items-center justify-center bg-[rgba(0,0,0,0.9)]">
                        <div @click.away="open = false"
                            class="bg-white shadow-xl max-w-6xl w-full mx-12 sm:mx-28 md:mx-12 relative overflow-y-auto max-h-[90vh]">

                            <!-- Modal Content -->
                            <div class="flex flex-col md:flex-row gap-6">

                                <!-- Photo -->
                                <div
                                    class="md:flex-shrink-0 md:min-h-full h-[50vh] md:h-auto overflow-hidden  w-full md:w-90">
                                    <img src="{{ url('images/team/Dave.jpg') }}" alt="Dave Mills"
                                        class="object-cover min-h-full  rounded-none">
                                </div>

                                <!-- Name, Title, Description & contact -->
                                <div class="flex flex-col w-full md:py-12">
                                    <!-- Name & Title with red border -->
                                    <div>
                                        <div class="flex-1 flex flex-col  border-r-12 border-stats4sd-red ml-8 pr-8">
                                            <h2 class="text-3xl font-bold">Dave Mills</h2>
                                            <p class="text-stats4sd-red uppercase text-xl font-semibold mt-1">
                                                Senior Data Engineer
                                            </p>
                                        </div>
                                    </div>
                                    <!-- description and contact -->
                                    <div class="flex flex-col xl:flex-row gap-12 items-start mx-8 mt-8">
                                        <!-- description -->
                                        <div class="flex-initial xl:w-7/12">
                                            <p class="text-sm ">
                                                Dave leads Stats4SD's data systems and platforms team, providing robust
                                                technical solutions to support complex data management challenges. He
                                                specialises in database management, web design, and building data
                                                collection tools with ODK to support large-scale data collection
                                                efforts. He has over a decade of experience working with large and small
                                                projects. In his work, Dave is keen on promoting the careful and
                                                considered use of technology to support the work of our partners and
                                                provides both technical expertise and an understanding of when and how
                                                technology can be brought in to improve efficiency and quality.
                                            </p>
                                        </div>

                                        <!-- Contact -->
                                        <div class="xl:w-5/12 flex flex-col text-sm">
                                            <div class="h-2 w-12 bg-stats4sd-red mb-3 xl:hidden"></div>
                                            <span class="text-lg font-bold mb-4">{{ t('Contact') }}</span>

                                            <!-- Email -->
                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 24 24" class="flex-shrink-0">
                                                    <path
                                                        d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z" />
                                                </svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">Email</span>
                                                    <a href="mailto:d.e.mills@stats4sd.org"
                                                        class="text-stats4sd-red break-words">
                                                        d.e.mills@stats4sd.org
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                                </svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">LinkedIn</span>
                                                    <a href="https://www.linkedin.com/in/dave-mills-ssd" target="_blank"
                                                        class="text-stats4sd-red break-words">
                                                        View profile
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mb-3 flex flex-row items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                                <div class="ml-6">
                                                    <span class="font-semibold block">GitHub</span>
                                                    <a href="https://github.com/dave-mills" target="_blank"
                                                        class="text-stats4sd-red break-words">
                                                        View profile
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>




            </div>
        </div>
    </section>
@endsection
