@extends('template.back.templateBack')
@section('content')
<div class="container m-5">
    <section class="mt-5">
        <h1 class="m-5 text-center" style="color: #CBAACB">Les commentaires: </h1>
        {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom: </th>
                <th scope="col">Prénom: </th>
                <th scope="col">Email : </th>
                <th scope="col">Photo : </th>
                <th scope="col">Fonction</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usersValidate as $item)
                <tr>
                  <td>{{$item->firstname}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td><img src="{{asset('storage/img/'.$item->img)}}" alt="" height="150px" width="150px"></td>
                  <td>{{$item->fonctions->fonction}}</td>
                  <td>
                    <a href="/aboutwelcome/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table> --}}
    </section>
    <section class="mt-5">
        <h1 class="m-5 text-center" style="color: #CBAACB">Valider les commentaires: </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom: </th>
                <th scope="col">Prénom: </th>
                <th scope="col">Email : </th>
                <th scope="col">Photo : </th>
                <th scope="col">Fonction</th>
                <th scope="col">Ne pas valider</th>
                <th scope="col">Valider</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comments->where("check", 0) as $item)
                <tr>
                  <td>{{$item->content}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->firstname}}</td>
                  {{-- <td><img src="{{asset('storage/img/'.$item->img)}}" alt="" height="150px" width="150px"></td> --}}
                  <td>{{$item->fonctions->fonction}}</td>
                  <td>
                      <form action="/commentB/{{$item->id}}" method="POST" >
                        @csrf
                        @method("DELETE")
                        <button class="btn" style="background-color : #EB96AA">Ne pas valider</button>
                    </form>
                  </td>
                  <td>
                    <a href="/validate/{{$item->id}}" class="btn" style="background-color : #98D4BB">Valider l'inscription</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
    
@endsection
