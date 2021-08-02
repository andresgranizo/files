@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subir archivos') }}</div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre del Archivo</th>
                                  <th scope="col">Ver</th>
                                  <th scope="col">Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($files as $file)
                                  <tr>
                                  <th scope="row">{{$file->id}}</th>
                                  <td>{{$file->name}}</td>
                                  <td> <a href="" class="btn btn-sm btn-outline-secondary"></td>
                                    Ver
                                    <td> <a href="" class="btn btn-sm btn-outline-danger"></td>
                                        Eliminar
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
@endsection
