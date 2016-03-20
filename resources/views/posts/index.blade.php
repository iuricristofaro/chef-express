@extends('login')

@section('title')
    Testando
@stop


@section('content')
    <h1>Testando</h1>

    @foreach($posts as $post)

        <h2>{{$post->titulo}}</h2>
        <p>{{$post->nome}}</p>
        <p>Data: {{$post->data}}</p>
        <p>{{$post->conteudo}}</p>

    @endforeach


@endsection