<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl font-bold block">Upcoming Tournaments</h2>
    <p class="py-2">US Chess Rated Events</p>
    <div class="max-w-2xl mx-auto my-8">
        @include('_molecules.tournament-grid', ['status' => 'upcoming'])
    </div>
    <div class="text-center my-8 block">
        <a href="/tournaments" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See All Tournaments ></a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 px-8 md:px-16">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/assets/images/open-tournament.webp" alt="Four players at a chess tournament.">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/assets/images/tournament-winner.webp" alt="Tournament Director Alex Gustafson awarding a Winner's certificate and cash prize to event winner Jacob Johnson.">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/assets/images/tournament-fun.webp" alt="Two players analyzing their game after a tournament round.">
        </div>
    </div>
</div>