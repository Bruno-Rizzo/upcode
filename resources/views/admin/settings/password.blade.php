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
                                Pesquisar Usuário
                            </h4>

                            <form action="{{ route('settings.search') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Nome</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" placeholder="Nome" name="name" @error('name')style="border:1px solid #F32F53"@enderror>
                                        @error('name') <span style="color: #F32F53">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button class="btn btn-sm btn-info me-2" type="submit">
                                            Pesquisar
                                        </button>
                                    </div>
                                </div>
                                <!-- end row -->

                            </form>

                            <hr>

                            @isset($users)
                                
                            
                            <div class="row">

                                <div class="col-12">

                                    <div class="card">

                                        <div class="card-body">

                                            <h4 class="card-title mb-4">
                                                Resultado da Pesquisa
                                            </h4>

                                            <table id="datatable"
                                                class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                                style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                                role="grid" aria-describedby="datatable-buttons_info">
                                                <thead>
                                                    <tr style="font-size:12px">
                                                        <th>ID</th>
                                                        <th>NOME</th>
                                                        <th>EMAIL</th>
                                                        <th>FUNÇÃO</th>
                                                        <th class="text-center" width="5%">VISUALIZAR</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $user->id }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->role->name }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('settings.password.edit',$user->id) }}">
                                                                    <i class=" ri-contacts-fill text-success"
                                                                        style="font-size:18px"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            @endisset

                        </div>

                    </div>

                </div>

            </div>
            <!-- end div row -->

        </div>

    </div>
@endsection
