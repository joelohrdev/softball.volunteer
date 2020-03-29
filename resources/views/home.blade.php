@extends('layouts.app')

@section('pageTitle', 'Dashboard')

@section('content')
    <div class="flex flex-row">
        <div class="container mx-auto px-6 md:px-0">

            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <div class="bg-white px-8 py-6 mb-5 mx-2 rounded-lg shadow-lg">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">
                            Family
                        </h3>
                        <div class="flex justify-between items-center mb-5">
                            <span class="font-light text-sm text-gray-600">
                                {{ Auth::user()->name }}
                            </span>
                            <span class="font-light text-sm text-gray-600">
                                Hours Volunteered: 2
                            </span>
                        </div>
                        @foreach($players as $p)
                            <div class="flex justify-between items-center mb-5">
                                <span class="font-light text-sm text-gray-600">
                                    {{ $p->name }}
                                </span>
                                    <span class="font-light text-sm text-gray-600">
                                    Hours Volunteered: 2
                                </span>
                            </div>
                        @endforeach
                        <div class="flex justify-between items-center mb-5">
                            <a href="/players/create" class="bg-purple-500 text-xs text-white hover:bg-purple-900 py-2 px-4 rounded">Add Player</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-white px-8 py-6 mb-5 mx-2 rounded-lg shadow-lg">
                        <div class="flex flex-col mb-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">
                                Upcoming Events
                            </h3>
                            <table class="min-w-full">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Event
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($dates as $d)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 font-medium text-gray-900">{{ $d->user->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $d->event->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ \Carbon\Carbon::parse($d->datetime)->format('M d, Y g:i A') }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white px-8 py-6 mb-5 mx-2 rounded-lg shadow-lg">
                        <div class="flex flex-col mb-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">
                                Past Events
                            </h3>
                            <table class="min-w-full">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Event
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($dates as $d)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 font-medium text-gray-900">{{ $d->user->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $d->event->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ \Carbon\Carbon::parse($d->datetime)->format('M d, Y g:i A') }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Did Not Attend
                                          </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
