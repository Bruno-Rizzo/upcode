@extends('admin.layouts.app')

@section('content')
    <div class="page-content">

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">CONFIGURAÇÕES</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Configurações</li>
                                <li class="breadcrumb-item active">Alterar Senha</li>
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
                                Alterar Senha
                            </h4>

                            <form action="{{ route('settings.password.update') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{$user->id}}">

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Nome</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" value="{{$user->name}}" readonly >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Email</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" value="{{$user->email}}" readonly >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Nova Senha</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="password" placeholder="Nova Senha" name="password"  @error('password')style="border:1px solid #F32F53"@enderror>
                                        @error('password') <span style="color: #F32F53">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Confirma Senha</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="password" placeholder="Confirma Senha" name="confirm_password" @error('confirm_password')style="border:1px solid #F32F53"@enderror>
                                        @error('confirm_password') <span style="color: #F32F53">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button class="btn btn-sm btn-info me-2" type="submit">
                                            Aterar Senha
                                        </button>
                                        <a href="{{ route('settings.password') }}" class="btn btn-sm btn-light">
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
            <!-- end div row -->

        </div>

    </div>
@endsection
