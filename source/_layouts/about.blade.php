@extends('_layouts.main')

@section('body')

@yield('content')

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
                        {{ $teammember->getExcerpt() }}
                        <p><a href="{{ $teammember->getUrl() }}"
                        title="Read more about {{ $teammember->name }}"
                        class="uppercase font-semibold tracking-wide mb-2"
                        >Read more</a></p>
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