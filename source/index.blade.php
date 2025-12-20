@extends('_layouts.main')

@section('body')
<div class="text-center">
    @img([
    'src' => '/raccoon-with-rook-320x320.webp',
    'alt' => 'An AI-generated illustration of a raccoon holding a chess piece',
    'class' => 'inline-block my-8',
    'width' => '320',
    'height' => '320',
    'fetchpriority' => 'high'
    ])
</div>

@include('_molecules.homepage-tournaments')

@include('_molecules.homepage-awry')

@include('_molecules.homepage-facebook')

<div class="py-8 mb-2 text-center">
    <h2 class="text-2xl font-bold accent">Get Email Updates</h2>
    <p>No spam here! Emails are usually once a month and have the essentials of the club's goings-on.</p>
</div>

<div x-data="{
    open: false,
}"
     class="mb-8"
>
    <!-- Button to open the modal -->
    <div class="text-center my-8 block">
        <button @click="open = true" role="button" class="text-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Subscribe</button>
    </div>


    <!-- Modal backdrop and panel -->
    <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold accent mb-1">Subscribe to Club Emails</h2>
            <p class="mb-2">Use the Google Form below to opt into emails.</p>
            <template x-if="open">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSctxUYVUx1AapjRsfS_cHE0ABZwdTLsHEEeaPGjimT2UaATkQ/viewform?embedded=true" width="640" height="400" title="Google form to subscribe to email updates">Loading…</iframe>
            </template>
            <!-- Button to close the modal -->
            <button @click="open = false" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Close
            </button>
        </div>
    </div>
</div>
@endsection
