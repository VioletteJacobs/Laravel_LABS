@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0" style="color: rgb(100, 31, 177)">Dashboard</h1>
@stop

@section('content')

@if ($errors->any()) 
<div class="alert alert-danger"> 
    <ul> 
        @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</div> 
@endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5 text-center" style="color: rgb(100, 31, 177)">My profile</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            {{-- <th scope="col">Image</th> --}}
                            <th scope="col">Nom :</th>
                            <th scope="col">Prénom :</th>
                            <th scope="col">Role :</th>
                            <th scope="col">Email :</th>
                          </tr>
                        </thead>
                        <tbody>
                            @auth
                                <tr>
                                    {{-- <td>
                                        <img src="{{asset('storage/img/'.Auth::user()->photo)}}" alt="" height="50px"> 
                                    </td> --}}
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->firstname}}</td>
                                    <td>{{Auth::user()->roles->role}}</td>
                                    <td>{{Auth::user()->fonctions->fonction}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    <td>
                                        <a href="/users/{{Auth::user()->id}}/edit" class="btn" style="background-color: #FFCCB6">Edit</a>
                                    </td>
                                </tr>
                            @endauth
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@stop
