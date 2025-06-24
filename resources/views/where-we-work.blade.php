@extends('layouts.app')
@section('content')

    <!-- Header section -->
    <div class="px-4 pb-12 pt-20 max-w-screen-xl mx-auto">
        <div class="max-w-xl">
            <div class="text-3xl font-bold uppercase text-stats4sd-red pt-12">
                {{ t("Where we work") }}
            </div>

            <div class="text-5xl font-bold pt-2 mb-4">
                {{ t("Where we work") }}
            </div>

            <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
                <ol class="flex space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="{{ url('/home') }}" class="hover:underline">{{ t("Home") }}</a>
                    </li>
                    <li>
                        <span>&gt;</span>
                    </li>
                    <li>
                        {{ t("Where we work") }}
                    </li>
                </ol>
            </nav>

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
