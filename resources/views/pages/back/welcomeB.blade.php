@extends('template.back.templateBack')
@section('content')
<div class="container">
    <section>
        <h1 class="m-5">Modifier le Carrousel : </h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Span</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>

              </tr>
            </tbody>
          </table>

    </section>
    <section>
        <h1 class="m-5 text-warning">Modifier les 3 valeurs : </h1>
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
                  <td>{{$item->icon}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->p}}</td>
                  <td>
                    <a href="">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </section>
</div>
    
@endsection


