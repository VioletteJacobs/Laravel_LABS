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
    
    
        <form action="/aboutwelcome/{{$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Paramètre droit : </label>
                <input type="text" name="para_right" value="{{old("para_right")? old("para_right") : $edit->para_right}}">
            </div>
            <div class="from-group">
                <label for=""> Paramètre gauche: </label>
                <input type="text" name="para_left" value="{{old("para_left")? old("para_left") : $edit->para_left}}">
            </div>
            <div class="from-group">
                <label for="">Contenu du Bouton : </label>
                <input type="text" name="btn_content" value="{{old("btn_content")? old("btn_content") : $edit->btn_content}}">
            </div>
            <div class="from-group">
                <label for="">Photo de la  de la vidéo : </label>
                <input type="file" name="img" value="{{old("img")? old("img") : $edit->img}}">
            </div>
            <div class="from-group">
                <label for="">Lien de la vidéo : </label>
                <input type="text" name="video_href" value="{{old("video_href")? old("video_href") : $edit->video_href}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    
    </section>
@endsection