@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="container m-5">
                        <section class="mt-5">
                            <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les titres de la page services: </h1>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($titresService as $item)
                                    <tr>
                                      <td>{{$item->title}}</td>
                                      <td>
                                        <a href="/titresService/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </section>
                    
                          <section class="mt-5">
                            <h1 class="m-5 text-center" style="color: #CBAACB">Modifier l'intro de la page Service : </h1>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Home</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($introService as $item)
                                    <tr>
                                      <td>{{$item->home}}</td>
                                      <td>{{$item->title}}</td>
                                      <td>{{$item->service}}</td>
                                      <td>
                                        <a href="/introervice/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                    
                    <section class="mt-5">
                        <h1 class="m-5 text-center" style="color: #CBAACB">Modifier les services: </h1>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Titre</th>
                                <th scope="col">Icon </th>
                                <th scope="col">Paragraphe</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $item)
                                <tr>
                                  <td>{{$item->title}}</td>
                                  <td><i class="{{$item->icons->name}}"></i></td>
                                  <td>{{$item->p}}</td>
                                  <td>
                                    <a href="/service/{{$item->id}}/edit" class="btn" style="background-color : #FFCCB6">Edit</a>
                                  </td>
                                  <td>
                                    <form action="/service/{{$item->id}}" method="POST">
                                      @csrf
                                      @method("DELETE")
                                      <button type="submit" class="btn" style="background-color : #DB6778">Delete</button>
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/service/create" style="background-color: rgb(44, 230, 171)">Ajouter un service</a>
                      </section>
                </div>
            </div>
        </div>
    </div>
@stop

