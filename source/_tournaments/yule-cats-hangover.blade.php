---
eventId: 12
title: "Yule Cat's Hangover"
gameFormat: '7SS, Randomized Formats'
location: 'Louisville, KY'
entryFee: 'Pay What You Want'
date: 'December 26, 2026'
complete: false
hideEntryButton: true
crosstable: ''
study: ''
---

@extends('_layouts.tournament')

@section('body')
    <h3>Welcome To Washbear Chess Club! 🦝♟️🐈‍⬛</h3>
    <p>The Yule Cat is a giant cat from Nordic folklore who eats anyone who didn't get new clothes at Christmastime.</p>
    <p>He needs a fun day to recover from all the feasting! But he's still a cat, and a cat's chaos never stops.</p>
    <p>Join us for a very silly, unrated event where every round is a surprise. Or just come hang out and play casually.</p>

    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: bring some snacks to share + pay what you want (recommended $10).</li>
        <li>All money goes to the Chess Education Foundation for hosting.</li>
        <li>No pre-registration needed. Just show up at least 10 minutes before any round you want to play.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>7 Rounds, Swiss System-ish</li>
        <li>Unrated. US Chess Federation membership is <strong>not</strong> required. Some kind of rating (US Chess, Chess.com, Lichess) is appreciated.</li>
        <li>Play any number of rounds: play them all, show up late, come and go, take a round off on a whim, whatever.</li>
        <li>Clocks and sets provided.</li>
    </ul>

    <h3 id="random-rounds">Every Round is Random</h3>
    <p>Each round's setup is drawn at random a few minutes before the hour, after pairings are settled. Nobody knows what's coming.</p>
    <ul>
        <li><strong>Starting position:</strong> Standard or a random Chess960 position</li>
        <li><strong>Base time:</strong> G/20, G/15, or G/10</li>
        <li><strong>Added time:</strong> +5 increment, 5 second delay, or none</li>
        <li><strong>Colors:</strong> Always a coin flip</li>
    </ul>

    <h3 id="scoring">Scoring</h3>
    <p>Showing up is rewarded. Every game you play earns points.</p>
    <ul>
        <li>Win: 2 points</li>
        <li>Draw: 1.5 points</li>
        <li>Loss: 1 point</li>
        <li>Missed round: 0 points</li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <p>A trophy for the player with the most points. No cash prizes.</p>

    <h2 id="schedule">Schedule</h2>
    <p>One round every hour, on the hour.</p>
    <ul>
        <li>Saturday, December 26th, 2026</li>
        <li>Doors open: 9am</li>
        <li>Round 1: 10am</li>
        <li>Round 2: 11am</li>
        <li>Round 3: 12pm</li>
        <li>Round 4: 1pm</li>
        <li>Round 5: 2pm</li>
        <li>Round 6: 3pm</li>
        <li>Round 7: 4pm</li>
        <li>El Nopal hangout afterwards</li>

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

@endsection

@section('entry-form')
    <div class="prose mx-auto mt-16 dark:prose-invert px-2 mb-8">
        <h2 id="online-registration" class="mb-8">Registration</h2>
        <p>No pre-registration needed. Bring snacks to share and show up for whichever rounds you like.</p>
    </div>
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
    <p>Shared snacks from all the players!</p>
    <p>Chess Education Foundation maintains an assortment of snacks and drinks available for sale.</p>

    <h2 id="post-tournament">Post-Tournament Hangout</h2>
    <p>The traditional El Nopal trip: all players and friends are invited for dinner/drinks after the tournament.</p>
    <address class="block">
        El Nopal<br/>
        811 Eastern Parkway<br/>
        Louisville, KY 40217<br/>
    </address>
    <p><a href="https://maps.app.goo.gl/a33wMDumAhrmQzSR8">Open directions in Google Maps</a></p>

@endsection
