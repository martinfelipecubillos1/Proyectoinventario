@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Modulos del sistema</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                @can('ver-rol')
                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-purple order-card">
                                        <div class="card-block">

                                            <h5>Usuarios</h5>
                                            <h2 class="text-right">    <img src="{{ asset('img/Blancos/usuarios-blanco-03.png') }}" alt="" width="50">
                                                <span>{{ $cant_usuarios }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Roles</h5>

                                            <h2 class="text-right"> <img src="{{ asset('img/Blancos/roles-blanco-04.png') }}" alt="" width="50"><span>{{ $cant_roles }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-red order-card">
                                        <div class="card-block">
                                            <h5>Compañias</h5>

                                            <h2 class="text-right"> <img  src="{{ asset('img/Blancos/compañias-blanco-05.png') }}" alt="" width="50"> <span>{{ $cant_comp }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/companias" class="text-white">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-gray order-card">
                                        <div class="card-block">
                                            <h5>Dependencias</h5>

                                            <h2 class="text-right"><img  src="{{ asset('img/Blancos/dependencias-blanco-07.png') }}" alt="" width="50"> <span>{{ $cant_depe }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/dependencias" class="text-white">Ver
                                                    más</a></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-gold order-card">
                                        <div class="card-block">
                                        <h5>Contratos</h5>

                                            <h2 class="text-right"><img  src="{{ asset('img/Blancos/contratos-blanco-10.png') }}" alt="" width="50"></i><span>{{$cant_contra}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/contratos" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Responsables Asignados</h5>

                                            <h2 class="text-right"><img  src="{{ asset('img/Blancos/resdependencia-blanco-08.png') }}" alt="" width="50"><span>{{$cant_res}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/responsablespordependencias" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>



                                @endcan
                                @can('editar-Usuario')
                                <div class="col-md-3 col-xl-3">
                                <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                        <h5>Elementos del inventario</h5>
                                            <h2 class="text-right"><img  src="{{ asset('img/Blancos/elementos-de-inventarios-blanco-12.png') }}" alt="" width="50"><span>{{$cant_elemen}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/elementosinv" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xl-3">
                                    <div class="card bg-c-brown order-card">
                                        <div class="card-block">
                                            <h5>Movimientos</h5>

                                            <h2 class="text-right"><img  src="{{ asset('img/Blancos/movimientoinventaro-blanco-13.png') }}" alt="" width="50"><span>{{$cant_mov}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/movimientoinvs" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
@endcan

@if (count($rol) == 0)
<h3>Por favor solicita permisos al Administrador para poder cargar las vistas del sistema</h3>
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
