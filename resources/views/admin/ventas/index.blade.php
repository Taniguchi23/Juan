@extends('layouts.app-admin')
@section('content')
<div class="page-title-box">
    <h4 class="page-title">Ventas</h4>
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
                                        <th>Email</th>
                                        <th>Monto</th>
                                        <th>Medio de Pago</th>
                                        <th>Transaccion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $ids => $venta)
                                            <tr>
                                                <td>{{ $venta->customer_email }}</td>
                                                <td>{{ $venta->amount }}</td>
                                                <td>{{ $venta->channel }}</td>
                                                <td>{{ $venta->purchase_number }}</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-soft-warning btn-circle mr-2 btnEditar"
                                                        title="Editar" data-toggle="modal" data-id="{{ $venta->id }}"
                                                        data-target="#venta">
                                                        <i class="dripicons-pencil"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-soft-danger btn-circle mr-2 btnBorrar"
                                                        title="Eliminar" data-id="{{ $venta->id }}"
                                                        data-nombres="{{ $venta->nombres }}">
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