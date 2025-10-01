---
eventId: 3
title: 'Trash Panda Throwdown #3'
gameFormat: '3SS, G/60;+30'
location: 'Louisville, KY'
entryFee: '$30'
date: 'January 31, 2026'
complete: false
crosstable: ''
---

@extends('_layouts.tournament')

@section('body')
    <p>A long walk through a deep dark forest where the path leading out is wide enough for a single raccoon. 🦝♟️♣️</p>
    <p>(With apologies to Mikhail Tal)</p>

    <h3>Welcome To Washbear Chess Club!</h3>
    <p>Trash Panda Throwdowns are the WCC take on your friendly neighborhood USCF-rated tournament. Events use a variety of time controls.</p>
    <p>For January 2026 we're taking it slow for three games of 60 minutes with a 30-second increment.</p>

    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: $30.</li>
        <li>Pay in cash on site or <a href="#contact">contact Alex</a> for Venmo.</li>
        <li>Register online <a href="#online-registration">using the Google Form below</a> (or <a href="#contact">contact Alex</a>) to secure your spot. On-site registration accepted up to capacity.</li>
        <li>USCF membership is required.</li>
        <li>Open to all ages and ratings.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>3 Rounds Swiss System</li>
        <li>G/60;+30</li>
        <li>Two sections: Open and U1400</li>
        <li>Clocks and sets provided.</li>
        <li><a href="/rulebook">Players should review the Washbear Chess Club Rulebook.</a></li>
        <li>Players may schedule one half-point bye if requested before Round 1 pairings.</li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <p>$160 in prizes based on 12 entries.</p>
    <ul>
        <li>1st Place Open: $100</li>
        <li>1st Place U1400: $60</li>
    </ul>

    <h2 id="schedule">Schedule</h2>
    <ul>
        <li>January 31, 2026</li>
        <li>Registration: 9:30am - 10am</li>
        <li>Round 1: 10am</li>
        <li>Round 2: 1pm or ASAP</li>
        <li>Round 3: 4pm or ASAP</li>
    </ul>

    <h2 id="location">Location</h2>
    <address class="block">
        Chess Education Foundation<br/>
        2908 Brownsboro Road<br/>
        Louisville KY 40206
    </address>
    <p><a href="https://maps.app.goo.gl/TXCfGaWw1ZJRt9nN6">Open in Google Maps</a></p>

    <h3 id="directions">Directions</h3>
    <p>From I-71 take the Zorn Ave exit towards Brownsboro Road.</p>
    <p>Turn right onto Brownsboro Road.</p>
    <p>The Chess Education Foundation is on the left, just past the Shell station.</p>
    <p>For parking, pass the building and turn left on Crescent Avenue. Immediately turn left to park in the rear of the building.</p>
    <p><img src="/assets/images/chess-education-foundation-directions.png" alt="Chess Education Foundation from Satellite View"></p>

    <h2 id="contact">Contact</h2>
    <ul>
        <li>Alex Gustafson</li>
        <li>alexjgustafson@gmail.com</li>
        <li>(502) 472-3042</li>
    </ul>

    @if(FALSE)

    <h2>Current Registrations</h2>
    <p>Last updated Oct 1, 2025</p>

    <h3>Registered</h3>

    @include('_components.registration-table', ['registrations' => [
        [
            'name' => 'Gustafson, Alex',
            'id' => '12598530',
            'rating' => '1507'
        ],
//        [
//            'name' => 'EXAMPLE NAME',
//            'id' => '1234567890',
//            'rating' => '1234'
//        ],
    ]])

    @endif
@endsection

@section('entry-form')
    <div class="prose mx-auto mt-16">
        <h2 id="online-registration" class="mb-8">Online Registration</h2>
    </div>
    <p class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfxqvEi3JvGBfhCwzwC1q5qhmNA4XWG-kgFe8WqXG0mTspCQ/viewform?embedded=true" width="640" height="1200">Loading…</iframe>
    </p>
@endsection

