@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>
        Meus usuários
        <a href="{{route('users.create')}}" class="btn btn-sm btn-success">Novo Usuário</a>
    </h1>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('users.edit', [$user->id])}}" class="btn btn-sm btn-info">Editar</a>
                                @if($loggedId !== intval($user->id))
                                    <form class="d-inline" method="POST" action="{{route('users.destroy', [$user->id])}}" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?'); ">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{$users->links()}}

@endsection
