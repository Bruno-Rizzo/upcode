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
                                Lista de Usuários
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-info ms-4"> + Novo Usuário</a>
                            </h4>

                            <table id="datatable"
                        class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                        aria-describedby="datatable-buttons_info">
                                <thead>
                                    <tr style="font-size:12px">
                                        <th>ID</th>
                                        <th>NOME</th>
                                        <th>EMAIL</th>
                                        <th>FUNÇÃO</th>
                                        <th>DATA DE CADASTRO</th>
                                        <th class="text-center" width="5%">EDITAR</th>
                                        <th class="text-center" width="5%">EXCLUIR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                            <td class="text-center">
                                                <a href="{{route('users.edit',$user->id)}}">
                                                    <i class=" ri-pencil-fill text-success" style="font-size:18px"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="http://" user="{{$user->id}}" data-bs-toggle="modal" data-bs-target="#UserModal">
                                                    <i class=" ri-delete-bin-2-fill text-danger" style="font-size:18px"></i>
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

        </div>

    </div>

<!-- Modal Excluir Usuário -->

<div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header" style="background-color: #C72744; color: #FFF">

          <h5 class="modal-title" id="exampleModalLabel"  style="color: #FFF; font-size: 15px">Excluir Usuário</h5>

        </div>

        <div class="modal-body">
            Deseja Realmente Excluir este Usuário?
        </div>

        <form action="{{route('users.delete')}}" method="post">
            @csrf
            <input type="hidden" name="id" id="idUser">

        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
        </div>
      </div>

    </form>

    </div>

</div>

@endsection

