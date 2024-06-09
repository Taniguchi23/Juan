@extends('layouts.app-admin')
@section('content')
    <div class="page-title-box">
        <h4 class="page-title">Usuarios</h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap tablaUsuarios"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Email</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $ids => $usuario)
                                            <tr>
                                                <td>{{ $usuario->nombres }}</td>
                                                <td>{{ $usuario->ap_paterno }}</td>
                                                <td>{{ $usuario->ap_materno }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-soft-warning btn-circle mr-2 btnEditar"
                                                        title="Editar" data-toggle="modal" data-id="{{ $usuario->id }}"
                                                        data-target="#usuario">
                                                        <i class="dripicons-pencil"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-soft-danger btn-circle mr-2 btnBorrar"
                                                        title="Eliminar" data-id="{{ $usuario->id }}"
                                                        data-nombres="{{ $usuario->nombres }}">
                                                        <i class="dripicons-trash"></i>
                                                    </button>
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
    </div>
@endsection
