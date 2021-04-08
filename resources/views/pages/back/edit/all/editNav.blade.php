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
            <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier un élément de la barre de navigation</h1>
    
            <form action="/service/{{$edit->id}}" method="POST">
                @csrf
                @method("PATCH")
                <div class="from-group">
                    <label for="">Lien : </label>
                    <input type="text" name="url" value="{{old("url")? old("url") : $edit->url}}">
                    <small> <br>* pour modifier le lien, toujours mettre un "/". Des modifications dans le site seront également nécessaires pour que ce lien mène vers une page. </small>
                </div>
                <div class="from-group">
                    <label for="">Nom : </label>
                    <input type="text" name="content" value="{{old("content")? old("content") : $edit->content}}">
                </div>
                <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
            </form>
    
    </section>
@endsection