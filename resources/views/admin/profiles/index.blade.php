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
                                <li class="breadcrumb-item active">Perfil</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-12">

                    <div class="col-md-3">
        
                        <!-- Simple card -->
                        <div class="card">

                            <center>
                                <img class="img-thumbnail rounded-circle avatar-xl mt-3" src="{{ asset('backend/assets/images/users/'.Auth::user()->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <p><strong class="me-1">Nome:</strong> {{Auth::user()->name}}</p>
                                    <p><strong class="me-1">Email:</strong> {{Auth::user()->email}}</p>
                                    <p><strong class="me-1">Função:</strong> {{Auth::user()->role->name}}</p>
                                    <a href="{{route('profiles.edit')}}" class="btn btn-info btn-sm waves-effect waves-light">Editar Perfil</a>
                                </div>
                            </center>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
