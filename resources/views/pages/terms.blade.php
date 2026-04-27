@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold mb-6">Terms of Service</h1>

    <p class="mb-4">By using this website, you agree to comply with the following terms and conditions. Please read them carefully.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Use of Content</h2>
    <p class="mb-4">All content on this site is for personal and professional purposes only. You may not copy, distribute, or reuse content without permission.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">User Responsibilities</h2>
    <p class="mb-4">When using this site, you agree not to:</p>
    <ul class="list-disc pl-6 mb-4">
        <li>Engage in unlawful or harmful activities</li>
        <li>Attempt to gain unauthorized access to the site</li>
        <li>Use the website in ways that could damage or impair its functionality</li>
    </ul>

    <h2 class="text-xl font-semibold mt-6 mb-2">Disclaimer</h2>
    <p class="mb-4">The information on this website is provided "as is" without warranties of any kind. We do not guarantee accuracy or availability at all times.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Limitation of Liability</h2>
    <p class="mb-4">We are not liable for any damages that may result from using this site, including but not limited to indirect or consequential damages.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Changes to Terms</h2>
    <p class="mb-4">We may update these terms from time to time. Continued use of the site after changes means you accept the updated terms.</p>

    <p class="mt-8">If you have any questions about these Terms, please <a href="{{ route('hire') }}" class="text-blue-600 underline">contact us</a>.</p>
</div>
@endsection
