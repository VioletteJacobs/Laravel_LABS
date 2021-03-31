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
    
    
        <form action="/footer/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Footer : </label>
                <input type="text" name="footer" value="{{old("footer")? old("footer") : $edit->footer}}">
            </div>
            <div class="from-group">
                <label for="">Lien: </label>
                <input type="text" name="href" value="{{old("href")? old("href") : $edit->href}}">
            </div>
            <div class="from-group">
                <label for="">Copyright : </label>
                <input type="text" name="copyright" value="{{old("copyright")? old("p") : $edit->copyright}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>
    
    </section>
@endsection