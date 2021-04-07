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

        <h1 style="color: #CBAACB" class="text-center">Créer un article</h1>

        <form action="/post" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title" value="{{old("title")}}">
            </div>


            <div class="from-group">
                <label for="">Contenu : </label>
                <textarea name="content" id=""  cols="150" rows="20">{{old("content")}}</textarea>
                <p> *If you want to have a paragraph write "br" </p>

            </div>


            <div class="from-group">
                <label for="">Image de couverture : </label>
                <input type="file" name="src" value="{{old("src")}}">
            </div>


            <div class="from-group">
                <label for="">Catégorie : </label>
                <select name="category_id" id="">
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->category}}</option>
                    @endforeach
                </select>
               
            </div>


            @foreach ($tag as $item)
            <div class="from-group">
                <label for="">{{$item->tag}} </label>
                <input type="checkbox" name="tag[]" value="{{$item->id}}">
                    
            </div>
            @endforeach
            

            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>

    </section>
@endsection