@extends('_layouts.main')

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">About</h2>
    </div>
    <div class="prose mx-auto dark:prose-invert">
        <h3>Club History</h3>
        <p>In April 2025, Alex Gustafson became a US Chess Club Tournament Director and created Washbear Chess Club in Louisville, KY.</p>
        <p>On July 1st, 2025, the club began its weekly meetup at Awry Brewing that still happens every Tuesday.</p>
        <p>On September 14th, 2025, the club organized its first US Chess rated tournament. Meetup regular Jacob Johnson won the event.</p>
        <p>On December 1st, 2025, Alex became a US Chess Local Tournament Director.</p>

        <h3>US Chess Affiliate</h3>
        <p><a href="{!! $page->affiliateMsa !!}">View the club's US Chess Federation tournament history.</a></p>

        <h3>About Alex</h3>
        <ul>
            <li>US Chess Federation Peak Rating: 1652</li>
            <li>US Chess Federation Local Tournament Director</li>
            <li>SafeSport Certified</li>
            <li>Contact at (502) 472-3042 or alexjgustafson@gmail.com</li>
        </ul>
    </div>
@endsection