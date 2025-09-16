@extends('_layouts.main')

@section('body')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold block mb-8">About</h2>
    </div>
    <div class="prose mx-auto dark:prose-invert">
        <p>Alex Gustafson created Washbear Chess Club in April 2025 in Louisville, KY. The club has held a weekly Tuesday meetup at Awry Brewing since July 1st, 2025.</p>
        <p>On September 14th, 2025 the club organized its first US Chess rated tournament. Meetup regular Jacob Johnson won the event.</p>
        <p><a href="{!! $page->affiliateMsa !!}">View the club's US Chess Federation tournament history.</a></p>

        <h3>About Alex</h3>
        <ul>
            <li>US Chess Federation Peak Rating: 1652</li>
            <li>US Chess Federation Club Tournament Director</li>
            <li>SafeSport Certified</li>
            <li>Homeschool dad and freelance web developer</li>
            <li>Contact at (502) 472-3042 or alexjgustafson@gmail.com</li>
        </ul>
    </div>
@endsection