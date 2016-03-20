@extends('blog')

@section('content')


    <section id="blog">
        <h1>blog</h1>
            <h2>{{$post->titulo}}</h2>
            <h3>{{$post->nome}} Data: {{$post->data}}</h3>
            <p>{{$post->conteudo}}</p>
    </section>

@endsection