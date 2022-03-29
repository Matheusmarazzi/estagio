@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')



    @if($errors->any())
        <ul class="errors">
            @foreach ($errord->all() as $errors)
                <li class="errors">{{$error}}</li>
            @endforeach
        </ul>
    @endif 
<div class="mb-3 row" id="formdiv">
    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @csrf
        <label for="exampleFormControlInput1" class="form-label"><h2>Editar Usuário:{{$user->name}}</h2></label><br>
        <label for="exampleFormControlInput1" class="form-label">Nome:</label><br>
        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{$user->name}}"><br>
        <label for="exampleFormControlInput1" class="form-label">Email::</label><br>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}"><br>
        <label for="exampleFormControlInput1" class="form-label">Senha:</label><br>
        <input type="password" class="form-control" name="password" placeholder="Senha"><br>
        <button id="bot" class="btn btn-outline-primary " type="submit"> Salvar</button>
        
    </form>
</div>
@endsection