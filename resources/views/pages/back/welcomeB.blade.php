@extends('template.back.templateBack')
@section('content')
<div class="container m-5">
    <section class="mt-5">
        <h1 class="m-5 text-warning">Modifier les 3 Cards welcome : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Icon</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Edit</th>
                {{-- <th scope="col">Edit</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($cardwelcome as $item)
                <tr>
                  <td><i class="{{$item->icone}}"></i></td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->p}}</td>
                  <td>
                    <a href="/cardWelcome/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    
    <section class="mt-5">
      <h1 class="m-5 text-warning">Modifier le texte de présentation : </h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Paragraphe de droite</th>
              <th scope="col">Paragraphe de gauche</th>
              <th scope="col">Contenu du bouton</th>
              {{-- <th scope="col">Image de la vidéo</th> --}}
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
                {{-- <td>{{$item->img}}</td> --}}
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
    <h1 class="m-5 text-warning">Modifier les témoignages: </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Commentaire </th>
            <th scope="col">Nom </th>
            <th scope="col">Prénom</th>
            {{-- <th scope="col">Image de la vidéo</th> --}}
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
              {{-- <td>{{$item->img}}</td> --}}
              <td>{{$item->fonction}}</td>
              <td>
                <a href="/testimonial/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
</div>
    
@endsection


