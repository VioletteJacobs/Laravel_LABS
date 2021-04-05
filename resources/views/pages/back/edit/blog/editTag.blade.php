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

        <h1>Modifier le tag</h1>
        <form action="/tag/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Tag : </label>
                <input type="text" name="tag" value="{{old("tag")? old("tag") : $edit->tag}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>

    </section>
@endsection