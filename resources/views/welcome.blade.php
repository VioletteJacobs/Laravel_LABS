@extends('template.main')
@section('content')


@include('partials.front.welcome.intro')
@include('partials.front.welcome.about')
    @include('partials.front.welcome.testimonial')
    @include('partials.front.welcome.services')
    @include('partials.front.welcome.team')
    @include('partials.front.all.newsletter')
    @include("partials.front.all.contact")
    
@endsection