@extends('template.main')
@section('content')

@include('partials.front.services.intro')
@include('partials.front.services.service')
@include('partials.front.services.features')
{{-- @include('partials.front.services.card') --}}
<h1 class="text-center">Rajouter les 3 derniers articles</h1>

@include('partials.front.all.newsletter')
@include("partials.front.all.contact")

@endsection