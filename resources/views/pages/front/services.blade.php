@extends('template.main')
@section('content')

@include('partials.front.all.intro')
@include('partials.front.services.service')
@include('partials.front.services.features')
@include('partials.front.services.card')


@include('partials.front.all.newsletter')
@include("partials.front.all.contact")

@endsection