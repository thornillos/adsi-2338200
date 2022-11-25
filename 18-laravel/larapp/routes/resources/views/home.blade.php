@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6 flex lg:flex-row flex-col items-center gap-8 my-6">
                {{-- --}}
                <div class="bg-white rounded-lg shadow 2xl lg:flex lg:max-w-leg">
                    <img src="{{ asset('images/mod-users.png') }}" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 fo"></div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
