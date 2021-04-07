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

        <h1>Modifier la catégorie</h1>
        <form action="/category/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Catégorie : </label>
                <input type="text" name="category" value="{{old("category")? old("category") : $edit->category}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #72AD9A">Update</button>
        </form>

    </section>
@endsection