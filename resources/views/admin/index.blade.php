@extends('admin.layouts.app')

@section('content')

<div class="page-content">

    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Usuários</p>
                                <h4 class="mb-2">{{$users}}</h4>
                                <p class="text-muted mb-0">total de usuários</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-user-3-line font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->

            </div><!-- end col -->
            
            <div class="col-xl-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Funções</p>
                                <h4 class="mb-2">{{$roles}}</h4>
                                <p class="text-muted mb-0">total de funções</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                    <i class="ri-contacts-line font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Permissões</p>
                                <h4 class="mb-2">{{$permissions}}</h4>
                                <p class="text-muted mb-0">total de permissões</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-warning rounded-3">
                                    <i class="ri-user-follow-line font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Administradores</p>
                                <h4 class="mb-2">1</h4>
                                <p class="text-muted mb-0">total de Administradores</p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-info rounded-3">
                                    <i class="ri-user-settings-line font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row -->

    </div>
    
</div>

@endsection