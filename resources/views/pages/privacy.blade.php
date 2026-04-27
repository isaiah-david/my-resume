@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold mb-6">Privacy Policy</h1>

    <p class="mb-4">Your privacy is important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you use this website.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Information We Collect</h2>
    <p class="mb-4">We may collect basic personal details such as your name, email address, and any information you provide through contact forms or submissions.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">How We Use Information</h2>
    <p class="mb-4">The information we collect may be used to:</p>
    <ul class="list-disc pl-6 mb-4">
        <li>Respond to your inquiries</li>
        <li>Improve the website and user experience</li>
        <li>Send updates or communications (if subscribed)</li>
    </ul>

    <h2 class="text-xl font-semibold mt-6 mb-2">Data Protection</h2>
    <p class="mb-4">We take appropriate security measures to protect your personal data against unauthorized access, alteration, disclosure, or destruction.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Third-Party Services</h2>
    <p class="mb-4">We may use third-party services such as analytics tools to better understand site usage. These services may collect data under their own policies.</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Your Rights</h2>
    <p class="mb-4">You have the right to access, correct, or request deletion of your personal information by contacting us.</p>

    <p class="mt-8">If you have any questions about this Privacy Policy, please <a href="{{ route('hire') }}" class="text-blue-600 underline">contact us</a>.</p>
</div>
@endsection
