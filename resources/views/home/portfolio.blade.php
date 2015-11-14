@extends('layouts.master')

@section('title', 'Ye Lin Htun')

@section('content')

{{-- Main Container --}}
<div class="container">

    @include('shared.message')

    {{-- Profile --}}
    @include('home.profile')

    {{-- Experience --}}
    @include('home.experience')

    {{-- Projects Card --}}
    @include('home.projects')

    {{-- Skills --}}
    @include('home.skills')

    {{-- Education --}}
    @include('home.education')

    {{-- Contact --}}
    @include('home.contact')
</div>


@endsection

