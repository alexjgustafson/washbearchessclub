<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl font-bold block">Upcoming Tournaments</h2>
    <p class="py-2">US Chess Rated Events</p>
    <div class="max-w-2xl mx-auto">
        @include('_molecules.tournament-grid', ['status' => 'upcoming'])
    </div>
    <div class="text-center text-xs mt-4 block">
        <a href="/tournaments">See All Tournaments ></a>
    </div>
</div>