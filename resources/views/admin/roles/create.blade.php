@extends('admin.layouts.app')

@section('content')
    <div class="page-content">

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Funções</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Funções</a></li>
                                <li class="breadcrumb-item active">Nova Função</li>
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
                                Nova Função
                            </h4>

                            <form action="{{ route('roles.store') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Nome</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" placeholder="Nome" name="name" value="{{ old('name') }}"  @error('name') style="border:1px solid red" @enderror>
                                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button class="btn btn-sm btn-info me-2" type="submit">
                                            Salvar
                                        </button>
                                        <a href="{{ route('roles.index') }}" class="btn btn-sm btn-light">
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
