@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier les catégories du Blog </h1>
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


        <form action="/category/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Catégorie : </label>
                <input type="text" name="category" value="{{old("category")? old("category") : $edit->category}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>

    </section>
@endsection