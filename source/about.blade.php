@extends('_layouts.main')

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">About</h2>
    </div>
    <div class="prose mx-auto dark:prose-invert">
        <h3>US Chess Federation Affiliate</h3>
        <p><a target="_blank" href="{!! $page->affiliateMsa !!}">View the club's US Chess Federation tournament history.</a></p>

        <h3>Club History</h3>
        <p>In April 2025, Alex Gustafson became a US Chess Club Tournament Director and created Washbear Chess Club in Louisville, KY.</p>
        <p>On July 1st, 2025, the club began its weekly meetup at Awry Brewing that still happens every Tuesday.</p>
        <p>On September 14th, 2025, the club organized its first US Chess rated tournament. Meetup regular Jacob Johnson won the event.</p>
        <figure class="text-sm italic">
            <p>
                @img([
                    'src' => 'tournament-winner--small.webp',
                    'alt' => 'Tournament Director Alex Gustafson awarding a certificate and cash prize to event winner Jacob Johnson',
                    'class' => 'mb-0',
                    'width' => '320',
                    'height' => '427'
                    'fetchpriority' => 'high'
                ])
            </p>
            <caption>Alex Gustafson awarding Jacob Johnson a winner's certificate and cash prize.</caption>
        </figure>
        <p>On December 1st, 2025, Alex became a US Chess Local Tournament Director.</p>
        <p>On December 6th, 2025, the club sponsored a team for the KY Team Chess Championship earning 2.0 points in 4 rounds.</p>
        <figure class="text-sm italic">
            <p>
                @img([
                    'src' => 'ky-team-championship-2025--small.webp',
                    'alt' => 'Members of the team in matching t-shirts pose for a portrait',
                    'width' => '320',
                    'height' => '355',
                    'class' => 'mb-0'
                    'lazyload' => 'true'
                ])
            </p>
            <caption>Members of the 2025 Kentucky Team Championship team. Left to right: Tyler Mathis, Trey Lemon, Alex Gustafson, and Bryan Miley</caption>
        </figure>

        <h3>About Alex</h3>
        <ul>
            <li>US Chess Federation Peak Rating: 1652</li>
            <li>US Chess Federation Local Tournament Director</li>
            <li>SafeSport Certified</li>
            <li>Contact at (502) 472-3042 or alexjgustafson@gmail.com</li>
        </ul>
    </div>
@endsection