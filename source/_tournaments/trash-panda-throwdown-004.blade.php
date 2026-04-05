---
eventId: 5
title: 'Trash Panda Throwdown #4'
gameFormat: '4SS, G/40;+10'
location: 'Louisville, KY'
entryFee: '$30'
date: 'April 5th, 2026'
complete: true
crosstable: ''
study: ''
---

@extends('_layouts.tournament')
@section('body')

    <p>Welcome to Washbear Chess Club! 🦝♟️♣️</p>

    <p>Trash Panda Throwdowns are the WCC take on your friendly neighborhood swiss system tournament. This event falls just before the KY Chess Association Action Championship. So we'll use their time control for a warm-up.
    </p>


    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: $30.</li>
        <li>Pay in cash on site or <a href="#contact">contact Alex</a> for Venmo.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>4 Rounds Swiss System</li>
        <li>G/40;+10</li>
        <li>Two sections: Open and U1400</li>
        <li>Players under 1400 can play in the Open section only if they were rated over 1400 at any time in 2026.</li>
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
        <li>April 5, 2026</li>
        <li>Registration: 10am-10:30</li>
        <li>Round 1: 10:30am</li>
        <li>Round 2: 1pm</li>
        <li>Round 3: ASAP</li>
        <li>Round 4: ASAP</li>
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

    <h2>Participants</h2>
    @include('_components.registration-table', ['registrations' => [
        [
            'name'   => 'Katie Yuan',
            'id'     => '16792316',
            'rating' => '1638',
        ],
        [
            'name'   => 'Ethan Franklin',
            'id'     => '32537303',
            'rating' => '1389',
        ],
        [
            'name'   => 'Keegan Gross',
            'id'     => '31630703',
            'rating' => '1343',
        ],
        [
            'name'   => 'Andrew Whiteman',
            'id'     => '32637327',
            'rating' => '1287',
        ],
        [
            'name'   => 'Tyler Mathis',
            'id'     => '32568134',
            'rating' => '1240',
        ],
        [
            'name'   => 'Tommy Tran',
            'id'     => '14946325',
            'rating' => '1230',
        ],
        [
            'name'   => 'Mitchell Smith',
            'id'     => '32628971',
            'rating' => '1145',
        ],
        [
            'name'   => 'Joshua Zaczek',
            'id'     => '31886505',
            'rating' => '1044',
        ],
    ]])

@endsection

@section('secondary-body')
    <h2 id="contact">Contact</h2>
    <ul>
        <li>Alex Gustafson</li>
        <li>alexjgustafson@gmail.com</li>
        <li>(502) 472-3042</li>
    </ul>

    <h2>Amenities</h2>
    <p>Complimentary water and coffee will be provided.</p>

    <h2 id-"post-tournament">Post-Tournament Hangout</h2>
    <p>All players and friends are invited for dinner/drinks after the tournament.</p>
    <address class="block">
        El Nopal<br/>
        811 Eastern Parkway <br/>
        Louisville, KY 40217<br/>
    </address>
    <p><a href="https://maps.app.goo.gl/a33wMDumAhrmQzSR8">Open directions in Google Maps</a></p>

    <h2 id="lunch">Lunch</h2>
    <p>We'll be organizing a pizza delivery: choose from cheese, pepperoni, or mushroom. Purchase by the slice during registration at minimal cost.</p>
    <p>$2 per slice.</p>

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

@endsection