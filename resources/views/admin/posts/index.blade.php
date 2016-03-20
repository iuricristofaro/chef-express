@extends('admin')

@section('title')
    Administrador
@stop


@section('content')
    <h1>Blog</h1>

    <br>
    <a href="{{ route('admin.posts.cadastro') }}" class="btn btn-success">Cadastro</a>
    <br>
    <br>

    <table class="table">
        <tr>
            <th>ID</th>
            <th style="width: 16%">Titulo</th>
            <th style="width: 14%">Nome</th>
            <th style="width: 14%">Data</th>
            <th >Conteudo</th>
            <th class="col-md-2">Action</th>
        </tr>

        @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->titulo}}</td>
                <td>{{$post->nome}}</td>
                <td>{{$post->data}}</td>
                <td>{{substr($post->conteudo,-50)}}</td>
                <td>
                    <a href="{{ route('admin.posts.editar', ['id'=> $post->id]) }}" class="btn btn-primary btn-xs">Editar</a> |
                    <a href="{{ route('admin.posts.destroy', ['id'=> $post->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>

        @endforeach

    </table>

    {!! $posts->render() !!}

@endsection