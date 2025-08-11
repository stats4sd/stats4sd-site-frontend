@extends('layouts.app')
@section('content')
    {{--    Privacy policy including Google Analytics --}}

    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-10 sm:px-22 md:px-14 2xl:px-3 mt-32 mx-auto">
        <div class="bg-stats4sd-red h-3 w-28 mb-2"></div>
        <div class="text-6xl font-bold pt-2">
            {{ t('Privacy Policy') }}
        </div>
    </div>

    <div class="max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl px-12 sm:px-24 md:px-16 2xl:px-4 mx-auto">
        <nav class="pt-12 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex space-x-2 text-sm text-gray-600">
                <li>
                    <a href="{{ url('/home') }}" class="hover:text-stats4sd-red ">{{ t('Home') }}</a>
                </li>
                <li>
                    <span>&gt;</span>
                </li>
                <li>
                    {{ t('Privacy Policy') }}
                </li>
            </ol>
        </nav>
    </div>

    <div class="w-full pt-12 pb-48 px-6 max-w-screen-lg 2xl:max-w-screen-xl 3xl:max-w-screen-2xl mx-auto">
        <div class="mx-auto max-w-7xl px-4 md:px-0">
            <p class="mb-4">This privacy policy explains how Stats4SD collects, uses, and protects your personal information when you visit our website and resources library. It covers both our main website at <a href="{{ config('app.url') }}" class="font-bold text-stats4sd-red">{{ config('app.url') }}</a> and our Resources Library at <a href="{{ config('app.resources_site_url') }}" class="font-bold text-stats4sd-red">{{ config('app.resources_site_url') }}</a>.</p>
            <h3 class="text-xl font-semibold mb-2">{{ t('Information We Collect') }}</h3>
            <p class="mb-4">{{ t('We do not collect any personally identifiable information from users of our website. If you email or communicate with us directly, we may keep any information you send us and process it to enable us to provide services and support to you, in accordance with local and international laws.') }}</p>
            <h3 class="text-xl font-semibold mb-2">{{ t('Cookies') }}</h3>
            <p class="mb-4">{{ t('Our website uses a small number of essential cookies to provide basic functionality. No cookies are used to track you within or beyond the site, and the cookies do not hold any personally identifiable information. We do not use third party cookies such as Google Analytics.') }}</p>
            <h3 class="text-xl font-semibold mb-2">{{ t('Website Analytics') }}</h3>
            <p class="mb-4">{{ t('We use Plausible Analytics to collect anonymous data about how visitors interact with our website. This helps us understand user behavior and improve our content. Plausible Analytics does not use cookies and does not collect any personally identifiable information, and the service is fully GDPR compliant. More information can be found on their website:') }} <a href="https://plausible.io" class="text-stats4sd-red font-bold">https://plausible.io</a></p>
            <h3 class="text-xl font-semibold mb-2">{{ t('Changes to This Privacy Policy') }}</h3>
            <p class="mb-4">{{ t('We may update this privacy policy from time to time. Any changes will be posted on this page, and we encourage you to review it periodically.') }}</p>
            <h3 class="text-xl font-semibold mb-2">{{ t('Contact Us') }}</h3>
            <p class="mb-4">{{ t('If you have any questions or concerns about this privacy policy or our data practices, please contact us at:') }}
                <a href="mailto:{{ config('mail.to.address') }}" class="text-blue-600 hover:underline">{{ config('mail.to.address') }}.</a>
            </p>
        </div>
    </div>

@endsection
