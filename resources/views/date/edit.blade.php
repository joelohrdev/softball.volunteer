@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        {{ $date->event->name }} | {{ \Carbon\Carbon::parse($date->datetime)->format('M d, Y g:i A') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('dates.update', $date->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-wrap mb-6">
                            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Select a user') }}:
                            </label>

                            <select name="user_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value=""></option>
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                            </select>

                            @error('nacategoryme')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Add') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
