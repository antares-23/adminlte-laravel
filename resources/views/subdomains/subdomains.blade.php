@extends('adminlte::layouts.app')



@section('main-content')

    <div class="container-fluid ">
        Tours


        <div class="col-xs-12">

            <a href="{{url('subdomains/create')}}" class="btn btn-info" role="button">Crear Nuevo Subdominio</a>

            @if($subdomains->is_admin )
                <a href="{{url('users/create')}}" class="btn btn-info" role="button">Alta cliente</a>
            @endif

            <a href="{{route('photos.show',1)}}" class="btn btn-info" role="button">Imagenes</a>


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listado de Tours</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre">Nombre</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre">Url</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre">Cliente</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Estatus">Estatus</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha alta">Fecha alta</th>
                                        <!--th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Agregar imagenes">Agregar imagenes</th-->
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha baja">Dar de baja</th>


                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($subdomains as $subdomain)
                                    <tr role="row">
                                        <td>{{$subdomain->name}}</td>
                                        <td>{{$subdomain->url}}</td>
                                        <td>{{$subdomain->user->name}}</td>


                                        <td>

                                            @if($subdomain->status==1)
                                                Activo
                                                @else
                                            Baja
                                                @endif
                                        </td>
                                        <td>{{$subdomain->date_start}}</td>

                                        <!--td>

                                        </td-->


                                        <td>
                                            @if($subdomain->status==1)
                                                <a href="{{route('subdomains.finish',$subdomain->id)}}" class="btn btn-info" role="button" >Baja</a>

                                            @else
                                            <a href="{{route('subdomains.finish',$subdomain->id)}}" class="btn btn-info" role="button" >Activar</a>
                                            @endif
                                        </td>



                                    </tr>
                                        @endforeach


                                   </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!-- /.col -->



    </div>

@endsection