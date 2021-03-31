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
    
    
        <form action="/service" method="POST">
            @csrf
            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title" value="{{old("title")}}">
            </div>
            <div class="from-group">
                <label for="">Icon: </label>
                <input type="text" name="icon" value="{{old("icon")}}">
            </div>
            <div class="from-group">
                <label for="">Paragraphe : </label>
                <input type="text" name="p" value="{{old("p")}}">
            </div>
            <button type="submit" class="btn btn-warning" style="background-color:rgb(44, 230, 171)">Ajouter </button>
        </form>
    
    </section>
@endsection