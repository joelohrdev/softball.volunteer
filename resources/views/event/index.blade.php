@extends('layouts.app')

@section('pageTitle', 'Available Events')

@section('content')
    <div class="flex flex-row">
        <div class="container mx-auto px-6 md:px-0">
            <livewire:all-events>
        </div>
    </div>
@endsection
