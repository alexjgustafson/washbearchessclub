@extends('_layouts.main')

@section('body')
    <div class="py-8 mb-8 text-center">
        <h2 class="text-3xl font-bold block">Tournaments</h2>
        <p class="py-2">USCF-rated events</p>
        <div class="max-w-2xl mx-auto">
            @include('_molecules.tournament-grid')
        </div>
    </div>
    <div class="text-center text-xs mt-4 block">
        <a href="/">< washbearchess.club</a>
    </div>
@endsection
