@extends('layouts.app')
@section('content')

    <div class="relative">
        <div class="overflow-hidden h-96">
            <img 
                src="{{ asset('images/front-page.webp') }}" 
                alt="Where We Work Page" 
                class="w-full h-full object-cover object-top"
            >
        </div>

        <div class="absolute inset-0 flex items-center justify-start text-white px-8">
            <div class="max-w-xl">
                <div class="text-5xl font-bold mb-2">
                    {{ t("Where we work") }}
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white pt-4 px-6 md:px-20">
        <div class="max-w-4xl mx-auto space-y-6 text-gray-800">
            <p>
                Coming soon!
            </p>
        </div>
    </section>

@endsection
