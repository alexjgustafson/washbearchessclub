@extends('_layouts.main')

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">T-Shirt Orders</h2>
    </div>
    <div class="prose mx-auto dark:prose-invert">
        <h3>Fall 2025 T-Shirt</h3>
        <p>"I wanted a t-shirt, so I made a t-shirt. You can get one too!" - Alex</p>

        <p>Represent the Washbear Chess Club at your next chess event with this unique shirt. A raccoon playing a simul is the cover story for this one-time issue of Washbear Chess Club magazine.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 px-8 py-8 md:px-16">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/assets/images/fall-2025-shirt-alex.webp" alt="Alex modelling the chess club's Fall 2025 t-shirt design, featuring a fake 1960s style magazine cover.">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/assets/images/fall-2025-shirt-design.webp" alt="A black t-shirt with the design of a fake magazine featuring a raccoon playing a simul chess exhibition on the cover.">
            </div>
        </div>

        <h4>Shirt Details</h4>
        <p>$30 per shirt.</p>
        <p>Washbear Chess Club "Magazine" design printed on a black Bella+Canvas Soft Cotton t-shirt.</p>

        <h4>How to Order</h4>
        <p>Submit your order by November 18th, 2025. Payment must be received by November 19th, 2025.</p>
        <p>Complete the Google form below to order. Alex will contact you by phone to arrange your payment.</p>
        <p>T-shirts should be available by the December 2nd meetup.</p>
        <p>At least 10 shirts need to be pre-ordered to offer them at this pricing. If we don't get 10, Alex will contact you with an updated price or a refund.</p>

        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScKly5g1wL4LuQ-4I6-KC0zVcI5tIGEUm6Z_pzHouWBj0Cjlg/viewform?embedded=true" width="640" height="2678">Loading…</iframe>
    </div>
@endsection