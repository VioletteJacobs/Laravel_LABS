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

        <h1>Ajouter une catégorie</h1>

        <form action="/category" method="POST">
            @csrf
            <div class="from-group">
                <label for="">Catégorie : </label>
                <input type="text" name="category" value="{{old("category")}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Créer</button>
        </form>

    </section>
@endsection