@extends('admin')

@section('title')
    Administrador
@stop

@section('content')
    <h1>Usúarios</h1>
    <br>
    <a href="{{route('admin.usuarios.cadastro')}}" class="btn btn-success">Cadastro</a>
    <br><br>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{ route('admin.usuarios.editar', ['id'=>$user->id]) }}" class="btn btn-primary btn-xs">Editar</a> |
                    <a href="{{ route('admin.usuarios.destroy', ['id'=>$user->id]) }}" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection