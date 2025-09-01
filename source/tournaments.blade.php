@extends('_layouts.main')

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">Tournaments</h2>

        <div id="upcoming" class="mb-8">
            <h3 class="py-2 text-xl font-bold block">Upcoming Events</h3>
            <div class="max-w-2xl mx-auto px-1">
                @include('_molecules.tournament-grid', ['status' => 'upcoming'])
            </div>
        </div>

{{--        <div id="past" class="mb-8">--}}
{{--            <h3 class="py-2 text-xl font-bold block">Past Events</h3>--}}
{{--            <div class="max-w-2xl mx-auto px-1">--}}
{{--                @include('_molecules.tournament-grid', ['status' => 'past'])--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="text-center text-xs mt-4 block">
        <a href="/">< washbearchess.club</a>
    </div>
@endsection
