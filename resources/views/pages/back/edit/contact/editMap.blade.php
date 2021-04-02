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

        <h1>Modifier votre adresse actuelle</h1>
        <form action="/map/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Adresse actuelle : </label>
                <input type="text" name="address" value="{{old("address")? old("address") : $edit->address}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>

    </section>
@endsection