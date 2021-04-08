@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier les services</h1>
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
    
    
        <form action="/service/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Titre : </label>
                <input type="text" name="title" value="{{old("title")? old("title") : $edit->title}}">
            </div>

            <div class="from-group">
                <div class="row d-flex">
                    @foreach ($icon as $item)
    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input" name="icon">
                            <i class="{{$item->name}}" name="icon" value="icon"></i>
                        </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="from-group">
                <label for="">Paragraphe : </label>
                <input type="text" name="p" value="{{old("p")? old("p") : $edit->p}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection