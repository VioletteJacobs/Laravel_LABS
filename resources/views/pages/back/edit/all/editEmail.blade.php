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
    
    
        <form action="/aboutwelcome/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Paramètre droit : </label>
                <input type="text" name="para_right" value="{{old("para_right")? old("para_right") : $edit->para_right}}">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    
    </section>
@endsection