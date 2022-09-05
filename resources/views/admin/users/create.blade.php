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
                                <li class="breadcrumb-item active">Usuários</li>
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
                                Novo Usuário
                            </h4>

                            <form action="{{ route('users.store') }}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Nome</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Nome" name="name" value="{{ old('name') }}" @error('name')style="border:1px solid red"@enderror>
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" @error('email')style="border:1px solid red"@enderror>
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Senha</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" placeholder="Senha" name="password" @error('password')style="border:1px solid red"@enderror>
                                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label">Função</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="role_id" @error('role_id')style="border:1px solid red"@enderror>
                                        <option value="">Selecione uma opção...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
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
                                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-light">
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
