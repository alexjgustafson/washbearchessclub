@extends('_layouts.main')

@section('body')
<div class="py-8 mb-8 text-center">
    <h1 class="text-3xl font-bold block">Washbear Chess Club</h1>
    <p>US Chess Federation affiliate in Louisville, KY.</p>
    <img src="/assets/images/raccoon-with-rook.jpg" width="320" height="320" class="inline-block my-8"/>
</div>
<div class="py-8 mb-8 text-center">
    <h2 class="text-3xl font-bold block">Knight Time at Awry</h2>
    <p class="py-2">Casual chess meetup.</p>
    <p class="py-2"><span class="font-bold">Tuesdays</span> 6pm - 10pm</p>
    <address class="py-4">
        <span class="font-bold block">Awry Brewing</span>
        <span class="block">1025 Barret Ave, Louisville, KY 40204</span>
    </address>
    <p class="text-2xl font-bold accent">More details on the Facebook group:</p>
    <p><a href="https://www.facebook.com/groups/washbearchessclub">https://www.facebook.com/groups/washbearchessclub</a></p>
</div>
<div class="mb-8 text-center">
    <p>If you're interested in new chess events coming to the Louisville area please signup below.</p>
</div>
<div class="bg-gray-100 mx-auto w-full flex justify-center p-4 lg:w-1/2 lg:rounded-xl shadow-lg shadow-gray-500 mb-8">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSctxUYVUx1AapjRsfS_cHE0ABZwdTLsHEEeaPGjimT2UaATkQ/viewform?embedded=true" width="640" height="2468" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</div>
@endsection
