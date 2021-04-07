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
    
    
        <form action="/cardWelcome/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Icon : </label>
                <input type="text" name="icone" value="{{old("icone")? old("icone") : $edit->icone}}">
            </div>
            <div class="from-group">
                <label for="">title : </label>
                <input type="text" name="title" value="{{old("title")? old("title") : $edit->title}}">
            </div>
            <div class="from-group">
                <label for="">Paragraphe : </label>
                <input type="text" name="p" value="{{old("p")? old("p") : $edit->p}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>
    
    </section>
@endsection