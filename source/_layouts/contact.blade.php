---
title: Contact
description: Get in touch with us
---
@extends('_layouts.main')

@section('body')
<h1>Contact</h1>

<p class="mb-8">Collaboration starts here. If you think we’d be a good fit for your next project please inquire with us by filling out the form.<br/>
We’ll reach out to you shortly in order to set up a meeting that will allow us to learn more about one another.</br>
We look forward to hearing from you soon.
</p>

<form action="/contact/succes" name="contact" method="POST" class="mb-12" netlify netlify-honeypot="zeef">
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Please provide your name"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-company">
                Company
            </label>

            <input
                type="text"
                id="contact-company"
                placeholder="please enter your company or organisation"
                name="company"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-role">
                Title / Role
            </label>

            <input
                type="text"
                id="contact-role"
                placeholder="Please enter your title / role"
                name="role"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>
    <div class="w-full mb-12">
        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
            How can we work together?
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"
            class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
            placeholder="Please provide context"
            required
        ></textarea>
    </div>
    <div class="w-full mb-12">
        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-location">
            Where are you located?
        </label>

        <input
                type="text"
                id="contact-location"
                placeholder="Please enter your location"
                name="location"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        <p class="hidden">
            <label>
                Is this an urgent matter? <input name="zeef" />
            </label>
        </p>
    </div>

    <div class="flex justify-end w-full">
        <input
            type="submit"
            value="Submit"
            class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
        >
    </div>
</form>
@stop
