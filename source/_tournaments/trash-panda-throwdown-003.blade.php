---
eventId: 3
title: 'Trash Panda Throwdown #3'
gameFormat: '3SS, G/60;+30'
location: 'Louisville, KY'
entryFee: '$30'
date: 'January 31, 2026'
complete: false
crosstable: ''
study: ''
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
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>3 Rounds Swiss System</li>
        <li>G/60;+30</li>
        <li>Two sections: Open and U1400</li>
        <li>Players under 1400 can play in the Open section only if they were rated over 1400 at any time in 2025 or 2026.</li>
        <li>Clocks and sets provided.</li>
        <li>US Chess Federation membership is required.</li>
        <li><a href="/rulebook">Players should review the Washbear Chess Club Rulebook.</a></li>
        <li>Players may schedule one half-point bye if requested before Round 1 pairings.</li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <p>$160 in prizes based on 12 entries.</p>
    <ul>
        <li>1st Place Open: $100</li>
        <li>1st Place U1400: $60</li>
    </ul>
    <h3 id="door-prize">Door Prize</h3>
    <p>$10 Gift certificate for Awry Brewing.</p>

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
    <p>
        @img([
            'src' => 'chess-education-foundation-directions--medium.webp',
            'alt' => 'Chess Education Foundation from Satellite View'
        ])
    </p>

    <h2 id="lunch">Lunch</h2>
    <p>We'll be organizing a pizza delivery from Papa John's: choose from cheese, pepperoni, or mushroom. Purchase by the slice during registration at minimal cost.</p>
    <p>$2 per slice, or $3 for every two slices of the same topping</p>

    <h3>Other Nearby Food Options</h3>
    <h4>Walkable</h4>
    <ul>
        <li>KK African Kitchen</li>
        <li>Lee's Famous Recipe Chicken</li>
        <li>Shell Station (Convenience Store)</li>
    </ul>
    <h4>Less than 5 minute drive</h4>
    <ul>
        <li>Asian Wok</li>
        <li>Blue Dog Bakery & Cafe</li>
        <li>CM Chicken (Korean Fried Chicken)</li>
        <li>Cafe Aroma (Mexican)</li>
        <li>Caffe Classico (European)</li>
        <li>Caspian Grill Persian Bistro</li>
        <li>Crescent Hill Coffee</li>
        <li>Derby City Pizza Co. Express</li>
        <li>Eatz (Vietnamese)</li>
        <li>Eggs Over Frankfort</li>
        <li>FABD Smokehouse</li>
        <li>Good Morning Breakfast & Brunch</li>
        <li>The Grape Leaf (Mediterranean)</li>
        <li>Heine Bros (Coffee Shop)</li>
        <li>Island Breeze Restaurant (Jamaican)</li>
        <li>Joely's Restaurant and Bar (Mexican)</li>
        <li>Kroger</li>
        <li>The Manhattan Project (Bar & Grill)</li>
        <li>Mesh Louisville (Contemporary American)</li>
        <li>Momma's Mustard, Pickles & BBQ</li>
        <li>Osaka (Sushi)</li>
        <li>Parlour (Pizza)</li>
        <li>Please & Thank You (Coffee Shop)</li>
        <li>Red Hog Restaurant & Butcher Shop</li>
        <li>SmashD on Frankfort (Hamburgers)</li>
        <li>Subway</li>
        <li>Taco Bell</li>
        <li>Taqueria Los Gorditos</li>
    </ul>

    <h2 id-"post-tournament">Post-Tournament Hangout</h2>
    <p>All players and friends are invited for dinner/drinks after the tournament.</p>
    <address class="block">
        El Nopal<br/>
        811 Eastern Parkway <br/>
        Louisville, KY 40217<br/>
    </address>
    <p><a href="https://maps.app.goo.gl/a33wMDumAhrmQzSR8">Open directions in Google Maps</a></p>

    <h2 id="contact">Contact</h2>
    <ul>
        <li>Alex Gustafson</li>
        <li>alexjgustafson@gmail.com</li>
        <li>(502) 472-3042</li>
    </ul>

    <h2>Current Registrations</h2>
    <p>Last updated Jan 9, 2026</p>

    <h3>Washbear Open</h3>
    @include('_components.registration-table', ['registrations' => [
        [
            'name' => 'Jacob Johnson',
            'id' => '30916362',
            'rating' => '1890'
        ],
        [
            'name' => 'Bryan Miley',
            'id' => '12936900',
            'rating' => '1498'
        ],
        [
            'name' => 'Alex Gustafson',
            'id' => '12598530',
            'rating' => '1496'
        ],
    ]])

    <h3>Raccoon Reserve (U1400)</h3>
    @include('_components.registration-table', ['registrations' => [
        [
            'name' => 'Mitchell Smith',
            'id' => '32628971',
            'rating' => '1286'
        ],
        [
            'name' => 'Andrew Whiteman',
            'id' => '32637327',
            'rating' => '1196'
        ],
        [
          'name'   => 'Samuel Firn',
          'id'     => '32443539',
          'rating' => '967',
        ],
        [
            'name' => 'Joshua Zaczek',
            'id' => '31886505',
            'rating' => '772'
        ],
        [
            'name' => 'Nelson Penn',
            'id' => '13083535',
            'rating' => '328'
        ],
]])

@endsection

@section('entry-form')
    <div class="prose mx-auto mt-16">
        <h2 id="online-registration" class="mb-8">Online Registration</h2>
    </div>
    <p class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSdfxqvEi3JvGBfhCwzwC1q5qhmNA4XWG-kgFe8WqXG0mTspCQ/viewform?embedded=true"
            width="640"
            height="1200"
            title="Google form to register for the tournament"
        >Loading…</iframe>
    </p>
@endsection

