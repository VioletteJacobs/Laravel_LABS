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
    
    
        <form action="/ready/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title" value="{{old("title")? old("title") : $edit->title}}">
            </div>
            <div class="from-group">
                <label for=""> Paragraphe: </label>
                <input type="text" name="p" value="{{old("p")? old("p") : $edit->p}}">
            </div>
            <div class="from-group">
                <label for="">Contenu du bouton: </label>
                <input type="text" name="btn_content" value="{{old("btn_content")? old("btn_content") : $edit->btn_content}}">
            </div>
            <div class="from-group">
                <label for="">Lien du bouton : </label>
                <input type="text" name="btn_href" value="{{old("btn_href")? old("btn_href") : $edit->btn_href}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    
    </section>
@endsection