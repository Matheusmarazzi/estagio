@extends('layouts.app')
@section('title', "Notícias do Usuário {{$user->name}}  ")
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Noticias do Usuário: {{$user->name}}</div>
                <form action="{{route('noticias.index',$user->id)}}">
                    <input type="search" id="form1" class="form-control" name="search" placeholder="pesquisar notícia" />
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                    <br>

                @foreach ($noticias as $noticia)
                <div class="card-body">
                    
                
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{$noticia->titulo}}</div>
                        <div class="card-body text-dark">
                            <p class="card-text">{{$noticia->corpo}}</p>
                            <a href="{{route('noticias.editar', ['user'=> $noticia->id, 'id' =>$noticia->id])}}" class="btn btn-success">Editar</a>
                            <form action="{{route('noticias.destroy',  ['id' =>$noticia->id])}}" method="POST" id="form2">
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Deletar Notícia</button>
                            </form>
                        </div>
                    </div>

                    
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
    
</div>
@endsection
