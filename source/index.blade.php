@extends('_layouts.main')

@section('body')
<div class="text-center">
    @img([
    'src' => '/raccoon-with-rook-320x320.webp',
    'alt' => 'An AI-generated illustration of a raccoon holding a chess piece',
    'class' => 'inline-block my-8',
    'width' => '320',
    'height' => '320',
    ])
</div>

@include('_molecules.homepage-tournaments')

@include('_molecules.homepage-awry')

@include('_molecules.homepage-facebook')

<div class="py-8 mb-8 text-center">
    <h2 class="text-2xl font-bold accent">Get Email Updates</h2>
</div>

<div class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
    <iframe
        src="https://docs.google.com/forms/d/e/1FAIpQLSctxUYVUx1AapjRsfS_cHE0ABZwdTLsHEEeaPGjimT2UaATkQ/viewform?embedded=true"
        width="640"
        height="1100"
        title="Google form to subscribe to email updates"
    >Loading…</iframe>
</div>
@endsection
