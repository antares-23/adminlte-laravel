@extends('adminlte::layouts.app')



@section('main-content')

    <div class="container-fluid ">
        <h1>Tours</h1>

        <div class="col-xs-12">

            @if(!count($tours))
                <a href="{{url('subdomains')}}" class="btn btn-info" role="button">Crear Subdominio</a>


            @elseif($tours->subdomain_id)
                <a href="{{url('tours/create',$tours->subdomain_id)}}" class="btn btn-info" role="button">Crear tour</a>
            @endif



            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listado de Tours</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if(count($tours))
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">

                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre">Nombre</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Estatus">Estatus</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha alta">Fecha activo</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fecha baja">Dar de baja</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($tours as $tour)
                                    <tr role="row">
                                        <td>{{$tour->name}}</td>
                                        <td>
                                            @if($tour->status==1)
                                                Activo
                                                @else
                                            Baja
                                                @endif
                                        </td>
                                        <td>{{$tour->date_start}}</td>
                                        <td>
                                            @if($tour->status==1)
                                                <a href="{{route('tours.finish',$tour->id)}}" class="btn btn-info" role="button" >Baja</a>

                                            @else
                                            <a href="{{route('tours.finish',$tour->id)}}" class="btn btn-info" role="button" >Activar</a>
                                            @endif
                                        </td>
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


        </div>
        <!-- /.col -->



    </div>

@endsection