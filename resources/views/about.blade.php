@extends('layouts.app')
@section('content')
    <!-- Header section -->

    <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-14 2xl:px-3 mt-32 mx-auto">
        <div class="bg-stats4sd-red h-3 w-28 mb-2"></div>
        <div class="text-6xl font-bold pt-2">
            {{ t('About us') }}
        </div>
    </div>

    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4  mx-auto">

        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:text-stats4sd-red ">{{ t('Home') }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li class="">
                    {{ t('About us') }}
                </li>
            </ol>
        </nav>
    </div>



    <!-- Header Image and content -->
    <div class="w-full h-64 md:h-80 lg:h-96  mt-10">
        <img src="/images/teamedited.png" alt="Header Image" class=" w-full h-full object-cover">
    </div>
    <div class="w-full  mb-4 " id="about-head">
        <!-- Content -->
        <div
            class=" -mt-30 mx-auto relative z-30 w-[90%] max-w-7xl bg-white px-12 lg:px-16 xl:px-20 pt-12 lg:pt-16 xl:pt-20">

            <p>
                {{ t("Stats4SD is a not-for-profit social enterprise committed to supporting sustainable
                                                                development by using quantitative and qualitative research methods, data and analysis to inform policies
                                                                and actions. Our goal is to help solve real-world problems for the benefit of society and the environment.") }}
            </p>
            <p class="pt-4">
                {{ t("When Stats4SD was founded in 2016, we decided that it should be a social
                                                                    enterprise. In the UK, social enterprises are companies, which means that they must be financially 
                                                                    viable to survive. However, the decision to be not-for-profit means that there are no company 
                                                                    owners (only employees) and there can be no distribution of profits for personal financial gain. 
                                                                    Instead, any surpluses are re-invested in the company or in building capacity in the countries 
                                                                    where we work, or used to make donations to good causes nominated by our staff.") }}
            </p>


        </div>

    </div>

    <!-- How we run -->
    <div class="  mx-auto w-[90%] max-w-7xl bg-white pt-12 lg:pt-16 xl:pt-20 ">
        <div class="w-full px-12 lg:px-16 xl:px-20 flex flex-col md:flex-row">
            <div class="md:w-1/3">
                <div class="bg-stats4sd-red w-20 mb-4   h-3"></div>
                <h2 class="text-stats4sd-red text-2xl font-bold uppercase mb-4"> {{ t('How we run Stats4SD') }}</h2>
            </div>
            <div class="md:w-2/3">
                <p>{{ t("Stats4SD has a flat structure with
                                                        a board of directors to make non-technical decisions and a Managing Director to oversee the running of the company.") }}
                </p>
                <p class="pt-4">
                    {{ t("When we start a new project for a partner or client, we appoint an overall project
                                                                    leader and form a team. Teams vary in size depending on the requirements of the work and the areas of 
                                                                    expertise required. While many projects may only involve one or two members of staff, we can also mobilise 
                                                                    our full team quickly to respond to larger requests.") }}
                </p>

            </div>
        </div>
        <div class=" mt-20 px-20">
            <img src="{{ asset('images/walk.jpg') }}" alt="Who we are image" class="object-cover object-center w-full h-[450px]">
        </div>

    <!-- having fun  -->

    <div class="w-full mt-20 mb-32 px-12 lg:px-16 xl:px-20 flex flex-col md:flex-row">
        <div class="md:w-1/3">
            <div class="bg-stats4sd-red w-20 mb-4   h-3"></div>
            <h2 class="text-stats4sd-red text-2xl font-bold uppercase mb-4"> {{ t('Having fun') }}</h2>
        </div>
        <div class="md:w-2/3">
            <p>{{ t("At Stats4SD we are committed to our work and we work hard - but we also like to relax and socialise.
                                    Our office includes a break-out area with comfortable chairs, where coffee, tea and snacks are always 
                                    available. We frequently organise social events, including our famous cheese and wine evenings, our 
                                    Christmas parties (both physical and virtual) and our annual summer walk – ending at a carefully 
                                    chosen local pub!") }}
            </p>

        </div>
    </div>
</div>



    <!-- contact -->

    <div class="bg-stats4sd-lightgrey  ">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full py-20">


            <!-- Left: Text-->
            <div class="flex flex-col w-full order-2 lg:order-1 lg:my-24 mb-24">
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                    <div class="ml-12 lg:px-0 w-full lg:max-w-[600px] ">

                        <div class="text-4xl font-bold ">

                            {{ t('Contact details') }}
                        </div>
                    </div>

                </div>
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="w-4 xl:w-6  bg-none h-auto flex-shrink-0"></div>
                    <div class="ml-12 pr-8 lg:px-0 w-full lg:max-w-[600px] mt-4">

                        <p>{{ t('Our office is in central Reading, about 10 minutes’ walk away from Reading Station:') }}
                        </p>
                        <p class="pt-4">{{ t('Address: 9 Castle Street, Reading RG1 7SB, UK') }}
                        </p>
                        <p>{{ t('Telephone: +44 (0)118 959 9949') }}
                    </div>

                </div>

            </div>
            <!-- Right: Picture -->
            <div class="order-1 lg:order-2">

                <div class="2xl:max-w-[600px] h-full lg:float-left px-4 lg:px-0 lg:mx-0">
                    <div style="overflow:hidden;max-width:100%;width:500px;height:500px;"
                        class=" mx-auto lg:mx-0 mt-8 lg:mt-0">
                        <div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=9+castle+street,+reading&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="googl-ehtml" href="https://kbj9qpmy.com/bp" id="authorize-map-data">Broadband
                            Providers</a>
                        << /div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
