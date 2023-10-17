---
title: About
description: A little bit about the site
---
@extends('_layouts.main')

@section('body')
    <h1>About us</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6"><strong>intro:</strong> We are a team of passionate individuals committed to making a positive impact on the world through our work. Together, we strive to help the public sector achieve its energy transition goals and create a sustainable future for generations to come. Our journey began with an unwavering belief in the power of renewable energy and our shared mission to combat climate change.</p>
    <p class="mb-6"><strong>our story:</strong> Every day, we wake up driven by a collective sense of purpose and a deep-rooted desire to make a difference. We understand that transitioning to clean energy is not just about reducing carbon emissions; it is about transforming lives, communities, and the very fabric of our society. It is about empowering individuals and businesses alike to embrace alternative sources of energy while fostering economic growth.</p>
    <p class="mb-6"><strong>our past struggle:</strong> As we navigate through this complex process, we not only bring expertise but also empathy, as we recognize that change can be daunting. We value collaboration and actively engage with stakeholders at every step – listening, learning, and adapting together. Our commitment extends beyond providing services; it lies in building long-lasting relationships based on trust and shared values.</p>
    <p class="mb-6"><strong>our mission:</strong> Together with our clients, partners and communities, we envision a future where renewable energy sources are central.</p> 
    <p class="mb-6"><strong>what we can do for you:</strong> We're a company of four because we believe the best results come from a direct partnership with clients.</p>
    <p class="mb-6">In other words, we do the work and we maintain the relationship. No sales reps, no account execs, no big guns trying to represent the work of someone else. Simply a couple of co-owners – 1 financial and procurement expert, 1 project and contract management expert, 1 project management and feasibility expert, 1 policy and financial expert – motivated to listen and serve.</p>
    <p class="mb-6">If you think we’d be a good fit for your next project, please reach out and <a href="/contact">inquire with us</a>. We look forward to hearing from you soon.</p>
    <h2>Our team</h2>
    @foreach ($team->where('featured', true)->take(4)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6 max-w-4xl mx-auto">
            @foreach ($row as $teammember)
                <div class="w-full md:w-1/2 md:mx-6">
                    <div class="flex flex-col mb-4 rounded overflow-hidden shadow-lg p-6">
                        <figure>
                            <img src="{{ $teammember->cover_image }}"
                                    alt="Photo of {{ $teammember->name }}"
                                    class="flex rounded-full w-full bg-contain">
                        </figure>
                        <div class="font-bold text-xl mt-2">{{ $teammember->name }}</div>
                        <p class="">{!! $teammember->expertise !!}</p>
                        {!! $teammember !!}
                        <a href="{{ $teammember->linkedin }}" alt="link to linkedin-profile of {{ $teammember->name }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
                    </div>
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        <!-- @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif -->
    @endforeach
@endsection



<!-- Wij zijn een team van gepassioneerde individuen die zich inzetten om via ons werk een positieve impact op de wereld te maken. Samen streven we ernaar de publieke sector te helpen haar doelstellingen op het gebied van de energietransitie te verwezenlijken en een duurzame toekomst voor de komende generaties te creëren. Onze reis begon met een onwrikbaar geloof in de kracht van hernieuwbare energie en onze gedeelde missie om de klimaatverandering te bestrijden.

Elke dag worden we wakker gedreven door een collectief gevoel van doelgerichtheid en een diepgeworteld verlangen om een verschil te maken. We begrijpen dat de transitie naar schone energie niet alleen gaat over het verminderen van de CO2-uitstoot; het gaat over het transformeren van levens, gemeenschappen en de structuur van onze samenleving. Het gaat erom individuen en bedrijven in staat te stellen alternatieve energiebronnen te omarmen en tegelijkertijd de economische groei te bevorderen.

Terwijl we door dit complexe proces navigeren, brengen we niet alleen expertise mee, maar ook empathie, omdat we beseffen dat verandering ontmoedigend kan zijn. Wij waarderen samenwerking en zijn bij elke stap actief betrokken bij belanghebbenden – door samen te luisteren, te leren en ons aan te passen. Onze inzet gaat verder dan het leveren van diensten; het ligt in het opbouwen van langdurige relaties gebaseerd op vertrouwen en gedeelde waarden.

Samen met onze klanten, partners en gemeenschappen stellen wij ons een toekomst voor waarin hernieuwbare energiebronnen centraal staan -->