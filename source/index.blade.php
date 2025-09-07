@extends('_layouts.main')

@section('body')
<div class="text-center">
    <img src="/assets/images/raccoon-with-rook-320x320.jpeg" alt="An AI-generated illustration of a raccoon holding a chess piece" width="320" height="320" class="inline-block my-8"/>
</div>

<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl font-bold block">Upcoming Tournaments</h2>
    <p class="py-2">USCF-rated events</p>
    <div class="max-w-2xl mx-auto">
        @include('_molecules.tournament-grid', ['status' => 'upcoming'])
    </div>
    <div class="text-center text-xs mt-4 block">
        <a href="/tournaments">See All Tournaments ></a>
    </div>
</div>

<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl font-bold block">Knight Time at Awry</h2>
    <p class="py-2">Casual chess meetup.</p>
    <p class="py-2"><span class="font-bold">Tuesdays</span> 6pm - 10pm</p>
    <address class="py-4">
        <span class="font-bold block">Awry Brewing</span>
        <span class="block">1025 Barret Ave, Louisville, KY 40204</span>
    </address>
</div>

<div class="py-8 mb-8 text-center">
    <h2 class="text-2xl font-bold accent">Join the Facebook Group</h2>
    <p><a href="https://www.facebook.com/groups/washbearchessclub">https://www.facebook.com/groups/washbearchessclub</a></p>
</div>

<div class="py-8 mb-8 text-center">
    <h2 class="text-2xl font-bold accent">Get Email Updates</h2>
</div>

<div class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSctxUYVUx1AapjRsfS_cHE0ABZwdTLsHEEeaPGjimT2UaATkQ/viewform?embedded=true" width="640" height="1100">Loading…</iframe>
</div>
@endsection
