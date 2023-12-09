<!-- resources/views/menu/index.blade.php -->

@extends('layouts.menu')

@section('content')
    {{-- Define your menu items here --}}
    @php
        $menuItems = [
            ['text' => 'Home', 'url' => '/', 'hasButton' => true, 'buttonText' => 'Home Button'],
            ['text' => 'About', 'url' => '/about', 'hasButton' => false, 'buttonText' => ''],
            // Add more menu items as needed
        ];
    @endphp

    @parent
@endsection