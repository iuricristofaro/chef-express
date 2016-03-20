@extends('blog')

@section('content')


<section id="blog">
    <h1>blog</h1>
    <article class="blog-center">
        @foreach($posts as $post)

            <h2>{{$post->titulo}}</h2>
            <h3>{{$post->nome}} Data: {{$post->data}}</h3>
            <p>{{substr($post->conteudo,1200)}}[...]</p>
            <div class="ver">
                <a href="{{ route('blog.paginas', ['id'=> $post->id]) }}">continue lendo</a>
            </div>
        @endforeach
    </article>

    <div class="center">
        {!! $posts->render() !!}
    </div>


</section>

@endsection