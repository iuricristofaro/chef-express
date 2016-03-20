@extends('admin')

@section('title')
    Administrador
@stop

@section('content')
    <h1>Editar</h1>
    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($user, ['route'=>['admin.usuarios.update', $user->id], 'method' => 'put']) !!}

    @include('admin.usuarios._form')

    <div class="form-group">
        {!! Form::label('role', 'Tipo:') !!}
        {!! Form::select('Selecione alguem', ['autor', 'suporte']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('Salvor', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection