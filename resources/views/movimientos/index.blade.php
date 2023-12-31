@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading"> Movimientos </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-rol')
                        <a class="btn btn-warning" href="{{ route('movimientos.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Codigo</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($Movimientos as $Movimiento)
                            <tr>
                                <td style="display: none;">{{ $Movimiento->id }}</td>
                                <td>{{ $Movimiento->id }}</td>
                                <td>{{ $Movimiento->nombremovimiento }}</td>
                                <td>

                                    <form action="{{ route('movimientos.destroy',$Movimiento->id) }}" method="POST">
                                        @can('editar-Compania')
                                        <a class="btn btn-info" href="{{ route('movimientos.edit', $Movimiento->id) }}">Editar</a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-Compania')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan


                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $Movimientos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
