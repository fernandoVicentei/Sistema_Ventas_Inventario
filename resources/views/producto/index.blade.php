@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Productos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="">
                                <a type="button" class="btn btn-primary" id="toggle-modal-1" href="{{route('producto.create')}}">
                                Añadir Producto</a>
                            </div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Unidad</th>
                                  </tr>
                                </thead>
                                <tbody id="tbody">
                                  
                                  @foreach ($productos as $producto)
                                  <tr>
                                    <td scope="row"> {{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>  
                                    <td>{{$producto->descripcion}}</td>  
                                    <td>{{ is_null($producto->id_categoria)?0: $producto->categoria_pro->nombre }}</td>  
                                    <td>{{ is_null($producto->id_unidad)?0:$producto->unidad->unidad  }}</td>                                   
                                  </tr>
                                  @endforeach 

                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
