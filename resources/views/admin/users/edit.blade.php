@extends('admin.layouts.app')

@section('content')
    <div class="page-content">

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Usuários</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                                <li class="breadcrumb-item active">Editar Usuário</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-12">

                    <div class="card">

                        <div class="card-body">

                            <h4 class="card-title mb-4">
                                Editar Usuário
                            </h4>

                            <form action="{{ route('users.update',$user->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" @selected($role->id == $user->role_id)>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role_id') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label"></label>
                                <div class="col-sm-6">
                                    <button class="btn btn-sm btn-info me-2" type="submit">
                                        Salvar
                                    </button>
                                    <a class="btn btn-sm btn-light" href="{{route('users.index')}}" >
                                        Voltar
                                    </a>
                                </div>
                            </div>
                            <!-- end row -->

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



@endsection