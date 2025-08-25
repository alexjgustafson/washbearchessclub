---
eventId: 1
title: 'Trash Panda Throwdown #1'
gameFormat: '4SS, G/40;+10'
location: 'Louisville, KY'
entryFee: '$30'
date: 'Sept 14, 2025'
---

@extends('_layouts.tournament')

@section('body')
    <p>Washbear Chess Club's first rated event! 🦝♟️♣️</p>

    <p>Trash Panda Throwdowns are the WCC take on your friendly neighborhood USCF-rated tournament. This tournament falls just before the KY Chess Association Class Championship. So we'll use their time control for a warm-up. Future events will use a variety of time controls.
    </p>

    <h2 id="registration">Registration</h2>
    <ul>
        <li>Entry fee: $30.</li>
        <li>Pay in cash on site or <a href="#contact">contact Alex</a> for Venmo.</li>
        <li>Limited to 16 players.</li>
        <li>Register online <a href="#online-registration">using the Google Form below</a> (or <a href="#contact">contact Alex</a>) to secure your spot. On-site registration accepted up to capacity.</li>
    </ul>

    <h2 id="format">Format</h2>
    <ul>
        <li>4 Rounds Swiss System</li>
        <li>G/40;+10</li>
        <li>USCF membership is required.</li>
        <li>Open to all ages and ratings.</li>
        <li>TD may create two sections if rating distribution warrants.</li>
        <li>Clocks and sets provided.</li>
    </ul>

    <h2 id="prizes">Prizes</h2>
    <ul>
        <li>b/4:  1st place $60</li>
        <li>b/8:  1st place $65, 2nd place $35</li>
        <li>b/12: 1st place $70, 2nd place $40, 3rd place $30</li>
    </ul>

    <h2 id="schedule">Schedule</h2>
    <ul>
        <li>Sept 14, 2025</li>
        <li>Registration: 9:30am - 10am</li>
        <li>Round 1: 10am</li>
        <li>Round 2: 12pm or ASAP</li>
        <li>Round 3: 2pm or ASAP</li>
        <li>Round 4: 4pm or ASAP</li>
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
    <p>From I-265 take the exit for Shelbyville Rd (US 60) westbound. At the first stoplight turn right onto N. English Station Road. To right onto Equity Place (across the street from Walmart Auto Care) and proceed around the building to the parking lot.
    </p>
    <p>When you enter the parking lot proceed to the far side of the building (see below.) Use the last door for Suite 200 and proceed upstairs.
</p>
    <p><img src="/assets/images/equity-place.jpeg" alt="13000 Equity Place Satellite View"></p>

    <h2 id="contact">Contact</h2>
        <ul>
            <li>Alex Gustafson</li>
            <li>alexjgustafson@gmail.com</li>
            <li>(502) 472-3042</li>
        </ul>

    <h2>Current Registrations</h2>
    <p>Last updated Aug 25, 2025</p>

    <h3>Registered</h3>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        USCF ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php $registrations = [
                    [
                        'name' => 'Gustafson, Alex',
                        'id' => '12598530',
                        'rating' => '1529'
                    ],
                    [
                        'name' => 'Miley, Bryan Raye',
                        'id' => '12936900',
                        'rating' => '1481'
                    ],
                    [
                        'name' => 'Mathis, Jordan Tyler',
                        'id' => '--',
                        'rating' => 'Unrated'
                    ],
                ]; ?>
                @foreach($registrations as $r)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$r['name']}}
                        </th>
                        <td class="px-6 py-4">
                            {{$r['id']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$r['rating']}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <h3>Waitlist</h3>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-16">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    USCF ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Rating
                </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
@endsection

@section('entry-form')
    <div class="prose mx-auto">
        <h2 id="online-registration" class="mb-8">Online Registration</h2>
    </div>
    <p class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfS86ohRoL5lB4xQaTwo5Nj92WE85QG2GcwB2mCCgiy_2wGSg/viewform?embedded=true" width="640" height="1200">Loading…</iframe>
    </p>
@endsection

