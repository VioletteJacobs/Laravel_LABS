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

        <h1>Ajouter une adresse email</h1>
        <form action="/email" method="POST">
            <div class="from-group">
                <label for="">Adresse  mail: </label>
                <input type="text" name="email" value="{{old("email")}}">
            </div>
            <button type="submit" class="btn btn-warning" style="background-color:rgb(44, 230, 171)">Ajouter </button>
        </form>
    
    </section>
@endsection