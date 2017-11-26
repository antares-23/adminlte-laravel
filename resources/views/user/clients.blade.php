@extends('adminlte::layouts.app')
@section('main-content')

    <div class="container-fluid ">

       @if($clients->is_admin)
            <a href="{{url('users/create')}}" class="btn btn-info" role="button">Alta cliente</a>


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Clientes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if(count($clients))
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">

                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre">Nombre</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Estatus">Correo</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha alta">rol</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha baja">Editar</th>
                                            @if(!$clients->is_admin)
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha baja">Cargar Imagenes</th>
                                            @endif
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach ($clients as $client)
                                            <tr role="row">
                                                <td>{{$client->name}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>@if($client->role)
                                                    Admin
                                                     @else
                                                    Cliente
                                                        @endif
                                                </td>

                                                <td>
                                                    <a href="{{route('users.edit',$client->id)}}" class="btn btn-info" role="button" >Editar</a>
                                                </td>

                                                @if(!$clients->is_admin)
                                                <td>
                                                    <a href="{{route('photos.show',$client->id)}}" class="btn btn-info" role="button">Imagenes</a>
                                                </td>
                                                    @endif

                                            </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        @endif



    </div>

@endsection