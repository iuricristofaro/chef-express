@extends('admin')

@section('title')
    Administrador
@stop

@section('content')
    <h1>Cadastro</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'admin.usuarios.store', 'method'=>'post']) !!}

    @include('admin.usuarios._form')

    <div class="form-group">
        {!! Form::label('role', 'Tipo:') !!}
        {!! Form::select('Selecione alguem', ['autor', 'suporte']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Novo',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection