@extends('template.back.templateBack')
@section('content')
<div class="container m-5">

  @if ($errors->any()) 
<div class="alert alert-danger"> 
    <ul> 
        @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</div> 
@endif

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le Logo: </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Logo</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td><img src="{{asset("storage/img/".$logo->url)}}" alt="" height= 50px></td>
                  <td>
                    <a href="/logo/{{$logo->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>
            </tbody>
        </table>
    </section>


    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier Votre barre de navigation : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Lien</th>
                <th scope="col">Contenu</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($nav as $item)
                  
              <tr>
                <td>{{$item->url}}</td>
                <td>{{$item->content}}</td>
                <td>
                  <a href="/navbar/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                </td>
              </tr>
              @endforeach

            </tbody>
        </table>
    </section>

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier la newsletter :</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titre</th>
                <th scope="col">Input placeHolder</th>
                <th scope="col">Coutenu du bouton</th>
              </tr>
            </thead>
            <tbody>

                <tr>
                  <td>{{$newsletter->title}}</td>
                  <td>{{$newsletter->inputPlaceHolder}}</td>
                  <td>{{$newsletter->btn}}</td>
                  <td>
                    <a href="/newsletter/{{$newsletter->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>

            </tbody>
        </table>
    </section>
    
    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le footer :</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Footer</th>
                <th scope="col">Lien</th>
                <th scope="col">Copyright</th>
              </tr>
            </thead>
            <tbody>

                <tr>
                  <td>{{$footer->footer}}</td>
                  <td>{{$footer->href}}</td>
                  <td>{{$footer->copyright}}</td>
                  <td>
                    <a href="/footer/{{$footer->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>

            </tbody>
        </table>
    </section>
</div>
    
@endsection


