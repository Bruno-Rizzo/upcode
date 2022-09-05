@extends('admin.layouts.app')

@section('content')
    <div class="page-content">

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Perfil</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfil</a></li>
                                <li class="breadcrumb-item active">Editar Perfil</li>
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
                                Editar Perfil
                            </h4>

                            <form action="{{ route('profiles.update') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Nome</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" @error('name') style="border:1px solid red" @enderror>
                                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Email</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" @error('email') style="border:1px solid red" @enderror>
                                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label">Imagem</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="file" name="image" id="image" @error('email') style="border:1px solid red" @enderror>
                                        @error('image') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-3">
                                        <img class="img-thumbnail rounded-circle avatar-xl mt-3" 
                                             src="{{ asset('backend/assets/images/users/'.Auth::user()->image) }}" alt="Card image cap" 
                                             id="showImage" name="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-1 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <button class="btn btn-sm btn-info me-2" type="submit">
                                            Editar Perfil
                                        </button>
                                        <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-light">
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
