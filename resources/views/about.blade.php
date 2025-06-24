@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <div class="px-4 pb-12 pt-20 max-w-screen-xl mx-auto">
        <div class="max-w-xl">
            <div class="text-3xl font-bold uppercase text-stats4sd-red pt-12">
                {{ t("About us") }}
            </div>

            <div class="text-5xl font-bold pt-2 mb-4">
                {{ t("About us") }}
            </div>

        </div>
    </div>

    <!-- About -->
    <section class="w-full flex flex-col lg:flex-row">
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("About us") }}</h2>
                <p>{{ t("Stats4SD is a not-for-profit social enterprise committed to supporting sustainable
                     development by using quantitative and qualitative research methods, data and analysis to inform policies
                      and actions. Our goal is to help solve real-world problems for the benefit of society and the environment.") }}
                </p>
                <p class="pt-4">{{ t("When Stats4SD was founded in 2016, we decided that it should be a social 
                    enterprise. In the UK, social enterprises are companies, which means that they must be financially 
                    viable to survive. However, the decision to be not-for-profit means that there are no company 
                    owners (only employees) and there can be no distribution of profits for personal financial gain. 
                    Instead, any surpluses are re-invested in the company or in building capacity in the countries 
                    where we work, or used to make donations to good causes nominated by our staff.") }}
            </div>
        </div>
    <!-- Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-72">
            <img src="{{ asset('images/about.webp') }}" alt="Who we are image" class="w-full h-full">
        </div>
    </div>
    </section>

    <!--  How we run -->
    <section class="w-full flex flex-col lg:flex-row bg-gray-100 ">
    <!-- Image -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md h-72">
            <img src="{{ asset('images/we-do.jpg') }}" alt="What we do image" class="w-full h-full">
        </div>
    </div>
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("How we run Stats4SD") }}</h2>
                <p>{{ t("Stats4SD has a flat structure with 
                    a board of directors to make non-technical decisions and a Managing Director to oversee the running of the company.") }}
                </p>
                <p class="pt-4">{{ t("When we start a new project for a partner or client, we appoint an overall project 
                    leader and form a team. Teams vary in size depending on the requirements of the work and the areas of 
                    expertise required. While many projects may only involve one or two members of staff, we can also mobilise 
                    our full team quickly to respond to larger requests.") }}
                </p>
            </div>  
        </div>
    </section>

    <!-- Having fun -->
    <section class="w-full flex flex-col lg:flex-row">
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("Having fun") }}</h2>
                <p>{{ t("At Stats4SD we are committed to our work and we work hard - but we also like to relax and socialise. 
                    Our office includes a break-out area with comfortable chairs, where coffee, tea and snacks are always 
                    available. We frequently organise social events, including our famous cheese and wine evenings, our 
                    Christmas parties (both physical and virtual) and our annual summer walk – ending at a carefully 
                    chosen local pub!") }}
                </p>
            </div>
        </div>
        <!-- Image -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md h-72">
                <img src="{{ asset('images/team.jpg') }}" alt="Principles image" class="w-full h-full">
            </div>
        </div>
    </section>

    <!--  Contact -->
    <section class="w-full flex flex-col lg:flex-row bg-gray-100 ">
        <!-- Image -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md h-72">
                <img src="{{ asset('images/we-do.jpg') }}" alt="What we do image" class="w-full h-full">
            </div>
        </div>
        <!-- Text -->
        <div class="w-full lg:w-1/2 p-10 flex items-center justify-center">
            <div class="max-w-md">
                <h2 class="text-2xl font-bold mb-4">{{ t("Contact details") }}</h2>
                <p>{{ t("Our office is in central Reading, about 10 minutes’ walk away from Reading Station:") }}
                </p>
                <p class="pt-4">{{ t("Address: 9 Castle Street, Reading RG1 7SB, UK") }}
                </p>
                <p>{{ t("Telephone: +44 (0)118 959 9949") }}
            </div>  
        </div>
    </section>
@endsection
