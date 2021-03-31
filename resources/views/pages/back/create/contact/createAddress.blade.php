@extends('template.back.templateBack')
@section('content')
<section class="container">
    {{-- messade erreur validate --}}
            @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif

        <h1>Ajouter une adresse</h1>
        <form action="/address" method="POST">
            @csrf
            <div class="from-group">
                <label for="">Adresse : </label>
                <input type="text" name="address" value="{{old("address")}}">
            </div>
            <button type="submit" class="btn btn-warning" style="background-color:rgb(44, 230, 171)">Ajouter </button>
        </form>
    
    </section>
@endsection