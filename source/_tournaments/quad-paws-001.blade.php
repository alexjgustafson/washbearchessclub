---
eventId: 4
title: 'Quad Paws #1'
gameFormat: 'Quads RR, G/30;+30'
location: 'Louisville, KY'
entryFee: '$25'
date: 'February 14, 2026'
complete: false
crosstable: ''
study: ''
---

@extends('_layouts.tournament')

@section('body')
    <h3>Welcome To Washbear Chess Club!</h3>
    <p>Quad Paws are the WCC take on a "Quads" round robin format.</p>
    <p>Players will be sorted by rating then divided into four-player round robin sections. Each player will play one game with the other three players in their section.</p>
    <p>If we have 1-3 extra players, the lowest quad plus extras will combine for a 3-round Swiss to allow everyone to play.</p>

    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: $25.</li>
        <li>Pay in cash on site or <a href="#contact">contact Alex</a> for Venmo.</li>
        <li>Register online <a href="#online-registration">using the Google Form below</a> (or <a href="#contact">contact Alex</a>) to secure your spot. On-site registration accepted up to capacity.</li>
        <li>No byes. Players are expected to play all rounds.</li>
        <li>Registration may be restricted based on venue capacity. Register online to secure your spot.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>3 Rounds, "Quads" Round Robin format</li>
        <li>G/30;+30</li>
        <li>Clocks and sets for playing area provided.</li>
        <li>US Chess Federation membership is required.</li>
        <li><a href="/rulebook">Players should review the Washbear Chess Club Rulebook.</a></li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <p>$60 to the winner of each quad/section.</p>
    <p>$5 refunded to every player that plays all 3 rounds without withdrawal or forfeit.</p>

    <h2 id="schedule">Schedule</h2>
    <ul>
        <li>Saturday, February 14th, 2026</li>
        <li>Registration: 9:30am - 10am</li>
        <li>Round 1: 10am</li>
        <li>Pizza delivered 11:30am</li>
        <li>Round 2: ASAP (Approximately 12pm)</li>
        <li>Round 3: ASAP (Approximately 2pm)</li>
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
    <p>From I-265 take the exit for Shelbyville Rd (US 60) westbound. At the first stoplight turn right onto N. English Station Road. Turn right onto Equity Place (across the street from Walmart Auto Care) and proceed around the building to the parking lot.</p>
    <p>When you enter the parking lot, proceed to the far side of the building (see below.) Use the last door for Suite 200, then take the stairs to the second floor.</p>
    <p>
        @img([
        'src' => 'equity-place--medium.webp',
        'alt' => '13000 Equity Place Satellite View'
        ])
    </p>

    <h2>Amenities</h2>
    <p>Complimentary water, coffee, and soda will be provided.</p>
    <p>A small amount of refridgerator space is available.</p>

    <h2 id="lunch">Lunch</h2>
    <p>We'll be organizing a pizza delivery from Papa John's: choose from cheese, pepperoni, or mushroom. Purchase by the slice during registration at minimal cost.</p>
    <p>$2 per slice, or $3 for every two slices of the same topping</p>

    <h3>Other Nearby Food Options</h3>
    <ul>
        <li>Bento Asian Kitchen</li>
        <li>Biscuit Belly</li>
        <li>Chick-fil-A</li>
        <li>Chipotle</li>
        <li>Chubby Ninja Ramen and Sushi</li>
        <li>Double Dogs Sports Bar</li>
        <li>El Nopal</li>
        <li>First Watch</li>
        <li>Five Guys</li>
        <li>Freddy's Frozen Custard</li>
        <li>Green District Salads</li>
        <li>Joella's Hot Chicken</li>
        <li>Panda Express</li>
        <li>Panera Bread</li>
        <li>Qdoba</li>
        <li>Sharetea</li>
        <li>Tropical Smoothie Cafe</li>
        <li>Waffle House</li>
        <li>Wal-Mart</li>
        <li>Wendy's</li>
    </ul>

    <h2 id-"post-tournament">Post-Tournament Hangout</h2>
    <p>All players and friends are invited for dinner/drinks after the tournament. Only 1/2 mile from the playing site.</p>
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
    <p>Last updated Jan 19, 2026</p>

    @include('_components.registration-table', [
    'showByesColumn' => false,
    'registrations' => [
        [
            'name' => 'Alex Gustafson',
            'id' => '12598530',
            'rating' => '1496'
        ],
        [
          'name'   => 'Tyler Mathis',
          'id'     => '32568134',
          'rating' => '1376',
        ],
        [
            'name' => 'Mitchell Smith',
            'id' => '32628971',
            'rating' => '1286'
        ],
    ]])


@endsection

@section('entry-form')
    <div class="prose mx-auto mt-16">
        <h2 id="online-registration" class="mb-8">Online Registration</h2>
    </div>
    <p class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSeBAAWQuTUxnDjjaJcMW7GgJImaKieAY2RCyEIHTVX0p9bWjQ/viewform?embedded=true"
            width="640"
            height="1200"
            title="Google form to register for the tournament"
        >Loading…</iframe>
    </p>
@endsection