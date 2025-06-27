@extends('layouts.app')
@section('content')
    <!-- Header section -->
    <div class="w-full border-l-24 border-stats4sd-red h-min mt-36 mb-12">
        <div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-8 sm:px-20 md:px-12 2xl:px-0  mx-auto">
            <div class="text-3xl font-bold uppercase text-stats4sd-red ">
                {{ t('Who We Are') }}
            </div>

            <div class="text-6xl font-bold pt-2">
                {{ t('About us') }}
            </div>
        </div>
    </div>
<div class=" max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-16 2xl:px-2  mx-auto">


            <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="flex space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="{{ url('/home') }}" class="hover:underline">{{ t('Home') }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        {{ t('About us') }}
                    </li>
                </ol>
            </nav>

  
    </div>

 <!-- About us  -->
    <!-- Right: Text and Button -->
    <div class=" py-16 ">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch w-full">

            <div class="order-1 lg:order-1">
                <div
                    class="2xl:max-w-[600px] w-full lg:float-right h-full mx-auto px-4 lg:px-0 lg:mx-0">
                   <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="object-cover h-full">
                </div>
            </div>
            <!-- Right: Text and Button -->
            <div class="flex flex-col w-full order-2 lg:order-2 lg:my-12">
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="px-8 lg:px-0">

                        <div class="text-4xl font-bold ">
                            {{ t('About us') }}
                        </div>
                    </div>
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                </div>
                <div class="flex flex-col lg:max-w-[600px] justify-center pl-8 lg:pl-0 pr-12 mt-4">
                    <p>{{ t("Stats4SD is a not-for-profit social enterprise committed to supporting sustainable
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
        </div>
    </div>
 <!-- How we run -->

     <div class="  ">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch w-full">


            <!-- Left: Text-->
            <div class="flex flex-col w-full order-2 lg:order-1 lg:my-24">
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                    <div class=" lg:px-0 w-full ml-12 lg:max-w-[600px] ">

                        <div class="text-4xl font-bold ">
                            {{ t('How we run Stats4SD') }}
                        </div>
                    </div>

                </div>
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="w-4 xl:w-6  bg-none h-auto flex-shrink-0"></div>
                    <div class="ml-12 pr-8 lg:px-0 w-full lg:max-w-[600px] mt-4">

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
                
            </div>
             <!-- Right: Picture -->
            <div class="order-1 lg:order-2">
                <div
                    class="2xl:max-w-[600px] h-full lg:float-left px-4 lg:px-0 lg:mx-0">
                   <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="object-cover h-full">
                </div>
            </div>
        </div>
    </div>





 <!-- having fun  -->
    <!-- Right: Text and Button -->
    <div class=" py-16 ">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">

            <div class="order-1 lg:order-1">
                <div
                    class="2xl:max-w-[600px] w-full lg:float-right h-full mx-auto px-4 lg:px-0 lg:mx-0">
                   <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="object-cover h-full">
                </div>
            </div>
            <!-- Right: Text and Button -->
            <div class="flex flex-col w-full order-2 lg:order-2 lg:my-12">
                <div class="flex flex-row justify-between w-full items-stretch">
                    <div class="px-8 lg:px-0">

                        <div class="text-4xl font-bold ">
                            {{ t('Having fun') }}
                        </div>
                    </div>
                    <div class="w-4 xl:w-6  bg-stats4sd-red h-auto flex-shrink-0"></div>
                </div>
                <div class="flex flex-col lg:max-w-[600px] justify-center px-8 lg:pl-0 lg:pr-12 mt-4">
                    <p>{{ t("At Stats4SD we are committed to our work and we work hard - but we also like to relax and socialise.
                                    Our office includes a break-out area with comfortable chairs, where coffee, tea and snacks are always 
                                    available. We frequently organise social events, including our famous cheese and wine evenings, our 
                                    Christmas parties (both physical and virtual) and our annual summer walk – ending at a carefully 
                                    chosen local pub!") }}
                </p>
                </div>
            </div>
        </div>
    </div>
 <!-- contact -->

     <div class="bg-stats4sd-lightgrey lg:py-12 ">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-12 items-center w-full">


            <!-- Left: Text-->
            <div class="flex flex-col w-full order-2 lg:order-1 lg:my-24">
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
                <div
                    class="2xl:max-w-[600px] h-full lg:float-left px-4 lg:px-0 lg:mx-0">
                   <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="object-cover h-full">
                </div>
            </div>
        </div>
    </div>

@endsection
