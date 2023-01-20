@extends('_layouts.main')

@section('body')
<div>
    <div class="bg-gradient-to-b from-sky-200 to-sky-200/0">
        <x-header />
        <div class="max-w-6xl mx-auto px-4 pt-24 pb-64">
            <h1 class="text-6xl font-extrabold text-center">For God and Neighbor</h1>
            <p class="mt-6 max-w-lg mx-auto text-gray-800/75 text-center">
                Parkway Pres is a church in Hyde Park, MA committed to worship God and love our neighbors.
            </p>
        </div>
        <div class="-mt-48 mx-auto bg-white max-w-xl w-full shadow p-12">
            <h2 class="font-medium text-2xl">Worship Services</h2>
            <p class="mt-4 text-sm text-gray-600">Join us at <strong class="font-medium text-gray-900">10:00 AM on Sundays</strong> at 17 Hale Street, Hyde Park for worship. If you're unable to join in person, join via <a href="#" class="font-medium">livestream</a>.</p>
            <div class="mt-8 flex items-center gap-6">
                <a href="#" class="bg-[#011424] text-sm text-white px-8 py-3">Join Us</a>
                <a href="#" class="text-sm text-gray-600">Recent Sermons</a>
            </div>
        </div>
    </div>
</div>
@endsection
