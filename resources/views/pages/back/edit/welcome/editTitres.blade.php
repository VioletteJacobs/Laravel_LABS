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
    
    
        <form action="/titreswelcome/{{$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title" value="{{old("title")? old("title") : $edit->title}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection