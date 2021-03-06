@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier l'introduction de la page Service</h1>
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
    
    
        <form action="/introervice/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Sous-titre Home: </label>
                <input type="text" name="home" value="{{old("home")? old("home") : $edit->home}}">
            </div>
            <div class="from-group">
                <label for="">Titre service: </label>
                <input type="text" name="title" value="{{old("title")? old("title") : $edit->title}}">
            </div>
            <div class="from-group">
                <label for="">Sous-titre service : </label>
                <input type="text" name="service" value="{{old("service")? old("service") : $edit->service}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection