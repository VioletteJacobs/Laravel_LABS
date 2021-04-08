@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier le logo</h1>
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
    
    
        <form action="/logo/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Logo :  </label>
                <input type="file" name="url" value="{{old("url")? old("url") : $edit->url}}">
            </div>

            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection