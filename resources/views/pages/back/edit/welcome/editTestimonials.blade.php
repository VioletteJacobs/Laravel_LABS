@extends('template.back.templateBack')
@section('content')
<section class="container">
    <h1 class="m-5 text-center" style="color: #CBAACB"> Modifier les témoignages</h1>
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
    
    
        <form action="/testimonial/{{$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Commentaire: </label>
                <input type="text" name="p" value="{{old("p")? old("p") : $edit->p}}">
            </div>
            <div class="from-group">
                <label for=""> Photo: </label>
                <input type="file" name="photo" value="{{old("photo")? old("photo") : $edit->photo}}">
            </div>
            <div class="from-group">
                <label for="">Nom : </label>
                <input type="text" name="name" value="{{old("name")? old("name") : $edit->name}}">
            </div>
            <div class="from-group">
                <label for="">Prénom : </label>
                <input type="text" name="firstname" value="{{old("firstname")? old("firstname") : $edit->firstname}}">
            </div>
            <div class="from-group">
                <label for="">Fonction : </label>
                <input type="text" name="fonction" value="{{old("fonction")? old("fonction") : $edit->fonction}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #F2DC99">Update</button>
        </form>
    
    </section>
@endsection