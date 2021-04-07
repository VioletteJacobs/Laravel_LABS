@extends('template.back.templateBack')
@section('content')
<div class="container m-5">

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les catégories du Blog : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Catégories</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                  <td>{{$item->category}}</td>
                  <td>
                    <a href="/category/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/category/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/category/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter une catégorie</a>
    </section>

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les tags du Blog : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tag</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tag as $item)
                <tr>
                  <td>{{$item->tag}}</td>
                  <td>
                    <a href="/tag/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/tag/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/tag/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter un tag</a>
    </section>

    <section class="mt-5" >
        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les articles validés du Blog : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($postsValidate as $item)
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{Str::limit($item->content, 250)}} ...</td>
                  <td>
                    <a href="/post/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                  </td>
                  <td>
                    <form action="/post/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/post/create" style="background-color: rgb(44, 230, 171)" class="p-2">Ajouter un post</a>
    </section>

    <section class="mt-5" >
      <h1 class="m-5 text-center" style="color: #CBAACB">Valider les posts : </h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Ne pas valider</th>
            <th scope="col">Valider</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($post->where("check", 0) as $item)
            <tr>
              <td>{{$item->title}}</td>
              <td>{{Str::limit($item->content, 250)}} ...</td>
              <td>
                <form action="/post/{{$item->id}}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button class="btn" style="background-color : #EB96AA">Ne pas valider</button>
              </form>
            </td>
            <td>
              <a href="/validatepost/{{$item->id}}" class="btn" style="background-color : #98D4BB">Valider la publication</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </section>
</div>
    
@endsection


