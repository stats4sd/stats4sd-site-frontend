@extends('layouts.app')
@section('content')
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-2xl  px-8 sm:px-20 md:px-12 2xl:px-26  mx-auto">
            <div class="text-2xl md:text-3xl font-bold uppercase text-stats4sd-red ">
                What we do
            </div>

            <div class="text-5xl md:text-6xl font-bold pt-2">
                Data systems and platforms
            </div>
        </div>
    </div>
    <div class="max-w-screen-lg 2xl:max-w-screen-2xl  px-14 sm:px-26 md:px-16 2xl:px-32 mx-auto">

        <nav class="pt-12  text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600 flex-col sm:flex-row">
                <li class="hidden sm:block">
                    <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                </li>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">
                    <a href="/we-do" class="hover:underline">What we do</a>
                </li>
                <li class="block sm:hidden">
                    <a href="/we-do" class="hover:underline">
                        < Back to What we do</a>
                </li>
                <li class="hidden sm:block"><span>&gt;</span></li>
                <li class="hidden sm:block">Data systems and platforms</li>
            </ol>
        </nav>
    </div>


    <div
        class="bg-white pt-8 pb-48  w-full max-w-screen-lg 2xl:max-w-screen-2xl  px-14 sm:px-26 md:px-16 2xl:px-32 mx-auto ">
        <div class="w-full  md:px-0 2xl:flex 2xl:flex-row 2xl:gap-16">
            <div class="w-full mb-12  2xl:px-0 2xl:w-1/4 ">
                <p class="mb-4">
                    The data systems and platforms team at Stats4SD is made up of IT professionals such as data engineers
                    and platform developers who specialise in data-handling services. Our approach to designing IT systems
                    is to take existing frameworks and pre-built modules and tailor them to the specific requirements of the
                    project, resulting in a product that is more cost effective than a fully custom-built system and much
                    better aligned to clients’ needs than an off-the-shelf solution.
                </p>
                <p class="mb-4">
                    We believe in co-creation approaches to development using open source tools and systems. This means that
                    the work we do now can be beneficial to us and others into the future. It also lets us provide our
                    clients with great value for money, as each new system we create builds on work that we and others have
                    done in the past.
                </p>
            </div>
            <div class="flex flex-wrap justify-center 2xl:justify-start gap-6">

                <a href="/we-do/data-systems/collection-management-systems"
                    class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('/images/wedo/de/datacoll.jpg');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                        <h3 class="text-lg font-semibold ">Data collection and management systems</h3>
                        <p class="text-sm mt-1">We provide clients with end-to-end data collection and management systems
                            and support the teams that collect the data.</p>
                    </div>
                </a>

                <a href="/we-do/data-systems/databases"
                    class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('/images/wedo/de/databasesm.jpg');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                        <h3 class="text-lg font-semibold ">Databases and platforms</h3>
                        <p class="text-sm mt-1">We build databases and user-friendly online platforms for our clients.</p>
                    </div>
                </a>


                <a href="/we-do/data-systems/dashboards"
                    class="relative h-96 w-full md:w-[calc(25%-1.5rem)] min-w-[260px] md:max-w-sm overflow-hidden hover-effect rounded-3xl">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('/images/wedo/de/dashboard.jpg');">
                    </div>

                    <!-- Bottom Half Overlay -->
                    <div
                        class="absolute bottom-0 h-3/5 w-full bg-[rgba(0,0,0,0.6)] text-white p-6 flex flex-col justify-around">
                        <h3 class="text-lg font-semibold ">Dashboards</h3>
                        <p class="text-sm mt-1">We build dashboards for managing data collection processes and for
                            presenting results.</p>
                    </div>
                </a>


            </div>
        </div>
    </div>
@endsection
