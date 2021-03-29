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
    
    
        <form action="/testimonial" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="from-group">
                <label for="">Commentaire: </label>
                <input type="text" name="p" value="{{old("p")}}">
            </div>
            {{-- <div class="from-group">
                <label for=""> Photo: </label>
                <input type="text" name="photo" value="{{old("photo"}}">
            </div> --}}
            <div class="from-group">
                <label for="">Nom : </label>
                <input type="text" name="name" value="{{old("name")}}">
            </div>
            <div class="from-group">
                <label for="">Prénom : </label>
                <input type="text" name="firstname" value="{{old("firstname")}}">
            </div>
            <div class="from-group">
                <label for="">Fonction : </label>
                <input type="text" name="fonction" value="{{old("fonction")}}">
            </div>
            <button type="submit" class="btn" style="background-color:rgb(44, 230, 171)">Ajouter</button>
        </form>
    
    </section>
@endsection