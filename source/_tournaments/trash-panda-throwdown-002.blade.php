---
eventId: 2
title: 'Trash Panda Throwdown #2'
gameFormat: '3SS, G/60;+30'
location: 'Louisville, KY'
entryFee: '$30'
date: 'Nov 8th, 2025'
---

@extends('_layouts.tournament')

@section('body')
    <p>Classical chess for a classy club. 🦝♟️♣️</p>
    <p>Trash Panda Throwdowns are the WCC take on your friendly neighborhood USCF-rated tournament. Events use a variety of time controls.</p>
    <p>For November 2025 we're taking it slow for three games of 60 minutes with a 30-second increment. Plenty of time for thoughtful endgames!</p>

    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: $30.</li>
        <li>Pay in cash on site or <a href="#contact">contact Alex</a> for Venmo.</li>
        <li>Limited to 16 players.</li>
        <li>Register online <a href="#online-registration">using the Google Form below</a> (or <a href="#contact">contact Alex</a>) to secure your spot. On-site registration accepted up to capacity.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>3 Rounds Swiss System</li>
        <li>G/60;+30</li>
        <li>USCF membership is required.</li>
        <li>Open to all ages and ratings.</li>
        <li>TD may create two sections if rating distribution warrants.</li>
        <li>Clocks and sets provided.</li>
        <li><a href="/rulebook">Players should review the Washbear Chess Club Rulebook.</a></li>
        <li>Players may schedule one half-point bye if requested before Round 1 pairings.</li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <ul>
        <li>b/4:  1st place $60</li>
        <li>b/8:  1st place $65, 2nd place $35</li>
        <li>b/12: 1st place $70, 2nd place $40, 3rd place $30</li>
    </ul>

    <h3 id="door-prize">Door Prize</h3>
    <p>Gift certificate for Awry Brewing. Random drawing held immediately prior to round 3.</p>

    <h2 id="schedule">Schedule</h2>
    <ul>
        <li>Nov 8th, 2025</li>
        <li>Registration: 9:30am - 10am</li>
        <li>Round 1: 10am</li>
        <li>Round 2: 1pm or ASAP</li>
        <li>Round 3: 4pm or ASAP</li>
    </ul>

    <h2 id="location">Location</h2>
    <address class="block">
        Finish Line Realty Training Center<br/>
        13000 Equity Place, Ste 200<br/>
        Louisville KY 40223
    </address>
    <p><a href="https://maps.app.goo.gl/zmUzFe7t5E1Ktthw9">Open in Google Maps</a></p>
    <p>NOTE: Event is held on the 2nd floor, stair access only.</p>

    <h3 id="directions">Directions</h3>
    <p>From I-265 take the exit for Shelbyville Rd (US 60) westbound. At the first stoplight turn right onto N. English Station Road. To right onto Equity Place (across the street from Walmart Auto Care) and proceed around the building to the parking lot.</p>
    <p>When you enter the parking lot proceed to the far side of the building (see below.) Use the last door for Suite 200 and proceed upstairs.</p>
    <p><img src="/assets/images/equity-place.jpeg" alt="13000 Equity Place Satellite View"></p>

    <h2 id="lunch">Lunch Order</h3>
    <p>We'll be organizing a pizza order from Papa John's: choose from cheese, pepperoni, or mushroom. Purchase by the slice during registration at minimal cost.</p>
    <p>$2 per slice, or $3 for every two slices of the same topping</p>

    <h2 id-"post-tournament">Post-Tournament Hangout</h3>
    <p>All players and friends are invited for dinner/drinks (and maybe some blitz?) after the tournament. Only 1/2 mile from the playing site.</p>
    <address class="block">
        El Nopal<br/>
        12937 Shelbyville Rd<br/>
        Louisville, KY 40243<br/>
    </address>
    <p><a href="https://maps.app.goo.gl/FZGESYNHTjCBV8yU8">Open in Google Maps</a></p>

    <h2 id="contact">Contact</h2>
    <ul>
        <li>Alex Gustafson</li>
        <li>alexjgustafson@gmail.com</li>
        <li>(502) 472-3042</li>
    </ul>

    <h2>Current Registrations</h2>
    <p>Last updated Nov 1, 2025</p>

    <h3>Washbear Open</h3>
    @include('_components.registration-table', ['registrations' => [
        [
            'name' => 'Michael C Johnson',
            'id' => '12836501',
            'rating' => '1902'
        ],
        [
            'name' => 'Jacob Johnson',
            'id' => '30916362',
            'rating' => '1873',
            'bye' => '1',
        ],
        [
            'name' => 'James D. Pollitt',
            'id' => '12548696',
            'rating' => '1873'
        ],
        [
            'name' => 'James Lawson',
            'id' => '12458634',
            'rating' => '1800'
        ],
        [
            'name' => 'Robert Earl Drury',
            'id' => '12593779',
            'rating' => '1771'
        ],
    ]])

    <h3>Raccoon Reserve (U1600)</h3>
    @include('_components.registration-table', ['registrations' => [
        [
            'name' => 'Bryan Raye Miley',
            'id' => '12936900',
            'rating' => '1486'
        ],
        [
            'name' => 'Tyler Mathis',
            'id' => '32568134',
            'rating' => '1386'
        ],
        [
            'name' => 'Mitchell Richard Smith',
            'id' => '32628971',
            'rating' => '1373'
        ],
        [
            'name' => 'Trey Christopher Lemon',
            'id' => '30461795',
            'rating' => '1066'
        ],
        [
            'name' => 'Samuel Firn',
            'id' => '32443539',
            'rating' => '936'
        ],
        [
            'name' => 'Joshua Zaczek',
            'id' => '31886505',
            'rating' => '925'
        ],
        [
            'name' => 'Nelson A Penn',
            'id' => '13083535',
            'rating' => '321'
        ],
        [
            'name' => 'Andrew Whiteman',
            'id' => '32637327',
            'rating' => 'Unrated'
        ]
    ]])

    <h3>Notes</h3>
    <ul>
        <li>Players in the Reserve section may choose to play in the Open section instead.</li>
        <li>To reduce byes, cross-section pairings may be used following the process in Rule 28M3.</li>
        <li>Also to reduce byes, TD Alex Gustafson will participate as a Permanent House Player (Rule 28M1) in both sections.</li>
    </ul>

    <h3>Waitlist</h3>
    <p>Once the 16 player spots are full, additional registrations will be placed on the waitlist in the order they are received.</p>
    @include('_components.registration-table', ['registrations' => []])

@endsection

@section('entry-form')
    <div class="prose mx-auto mt-16">
        <h2 id="online-registration" class="mb-8">Online Registration</h2>
    </div>
    <p class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdukGCHq3Wx611uVYqFBvH4z2KgVAHya1KpycdnDVaFFydQGQ/viewform?embedded=true" width="640" height="1200">Loading…</iframe>
    </p>
@endsection