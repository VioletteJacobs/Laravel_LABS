@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier les titres de la page service</h1>
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
    
    
        <form action="/titresService/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title"  value="{{old("title")? old("title") : $edit->title}}">
                <small> <br> * pour choisir la partie sous fond vert dans le titre, la mettre entre parenthèse. </small>
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection