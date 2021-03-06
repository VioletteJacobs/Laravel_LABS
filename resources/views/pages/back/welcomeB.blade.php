@extends('template.back.templateBack')
@section('content')
<div class="container m-5">
{{-- <section class="mt-5">
    <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le Carrousel: </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Commentaire </th>
            <th scope="col">Nom </th>
            <th scope="col">Prénom</th>

            <th scope="col">Fonction</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $item)
            <tr>
              <td>{{$item->p}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->firstname}}</td>
              <td>{{$item->fonction}}</td>
              <td>
                <a href="/testimonial/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </section>  --}}
  <section class="mt-5" >
    <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les titres de la page welcome : </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Edit</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($titrewelcome as $item)
            <tr>
              <td>{{$item->title}}</td>
              <td>
                <a href="/titreswelcome/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
    
    <section class="mt-5">
      <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le texte de présentation : </h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Paragraphe de droite</th>
              <th scope="col">Paragraphe de gauche</th>
              <th scope="col">Contenu du bouton</th>
              <th scope="col">Image de la vidéo</th>
              <th scope="col">Lien vidéo</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($about as $item)
              <tr>
                <td>{{$item->para_right}}</td>
                <td>{{$item->para_left}}</td>
                <td>{{$item->btn_content}}</td>
                <td><img src="{{asset('storage/img/'.$item->img)}}" alt="" height="150px" width="150px"></td>
                <td>{{$item->video_href}}</td>
                <td>
                  <a href="/aboutwelcome/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </section>

<section class="mt-5">
  <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les témoignages: </h1>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Commentaire </th>
          <th scope="col">Nom </th>
          <th scope="col">Prénom</th>
          <th scope="col">Image de la vidéo</th>
          <th scope="col">Fonction</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($testimonials as $item)
          <tr>
            <td>{{$item->p}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->firstname}}</td>
            <td><img src="{{asset('storage/img/avatar/'.$item->photo)}}" alt="" height="150px" width="150px"></td>
            <td>{{$item->fonction}}</td>
            <td>
              <a href="/testimonial/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
            </td>
            <td>
              <form action="/testimonial/{{$item->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  <a href="/testimonial/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter un témoignage</a>
</section>


<section class="mt-5">
  <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les profils des membres de l'équipe: </h1>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Photo </th>
          <th scope="col">Nom </th>
          <th scope="col">Prénom</th>
          <th scope="col">Fonction</th>
          <th scope="col">Edit</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($team as $item)
          <tr>
            <td><img src="{{asset('storage/img/team/'.$item->photo)}}" alt="" height="150px" width="150px"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->fonction}}</td>
            <td>
              <a href="/team/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
            </td>
            <td>
              <form action="/team/{{$item->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
              </form>
            </td>
          </tr>

          @endforeach
      </tbody>
  </table>
  {{-- <a href="/team/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter une membre à l'équipe</a> --}}
</section>

{{-- <section class="mt-5">
  <h1 class="m-5 text-center" style="color: #CBAACB">Modifier le profil du CEO: </h1>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Photo </th>
          <th scope="col">Nom </th>
          <th scope="col">Prénom</th>
          <th scope="col">Fonction</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($ceo as $item)
          <tr>
            <td><img src="{{asset('storage/img/team/'.$item->photo)}}" alt="" height="150px" width="150px"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->fonction}}</td>
            <td>
              <a href="/ceo/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</section> --}}



</div>
    
@endsection


