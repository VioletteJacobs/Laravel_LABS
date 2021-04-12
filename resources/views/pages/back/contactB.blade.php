@extends('template.back.templateBack')
@section('content')
<div class="container m-5">

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier la partie mauve : </h1>
        <table class="table">
            <thead>
              <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Paragraphe</th>
                  <th scope="col">Titre deux</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contactSection as $item)
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{$item->p}}</td>
                  <td>{{$item->title2}}</td>
                  <td>
                    <a href="/contactsection/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="mt-5" >
      <h1 class="m-5 text-center" style="color: #CBAACB">Modifier la carte : </h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Adresse</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>

              <tr>
                <td>{{$map->address}}</td>
                <td>
                  <a href="/map/{{$map->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                </td>
              </tr>
          </tbody>
      </table>
  </section>

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier vos adresses : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Adresse</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($address as $item)
                <tr>
                  <td>{{$item->address}}</td>
                  <td>
                    <a href="/address/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/address/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/address/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter une adresse</a>
    </section>

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier vos adresses Emails :</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($email as $item)
                <tr>
                  <td>{{$item->email}}</td>
                  <td>
                    <a href="/email/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/email/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/email/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter une adresse email :</a>
    </section>
    
    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier vos numéros de téléphone :</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($phone as $item)
                <tr>
                  <td>{{$item->phone}}</td>
                  <td>
                    <a href="/phone/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/phone/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/phone/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter une adresse email</a>
    </section>
    {{-- <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le formulaire de contact : </h1>
        <table class="table">
            <thead>
              <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Paragraphe</th>
                  <th scope="col">Titre deux</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>{{$formContact->title}}</td>
                  <td>{{$item->p}}</td>
                  <td>{{$item->title2}}</td>
                  <td>
                    <a href="/contactsection/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>
            </tbody>
        </table>
    </section> --}}
    


</div>
    
@endsection


