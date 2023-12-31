@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Proveedor</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::model($proveedor, ['method' => 'PATCH', 'route' => ['proveedores.update', $proveedor->id]]) !!}

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Identificacion:</label>
                                        <option value="">{{ $proveedor->identificacion }}</option>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Numero:</label>
                                        <option value="">{{ $proveedor->numero }}</option>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Tipo:</label>
                                        <option value="">{{ $tipoproveedor->nombre }}</option>
                                    </div>
                                </div>



                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre Proveedor:</label>

                                        {!! Form::text('nombreproveedor', null, ['class' => 'form-control']) !!}

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Direccion:</label>

                                        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Direccion:</label>

                                        {!! Form::text('correo', null, ['class' => 'form-control']) !!}

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Direccion:</label>

                                        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Guardar</button>

                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
