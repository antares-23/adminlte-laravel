@extends('adminlte::layouts.app')

@section('main-content')


    <link rel="stylesheet" href="http://localhost/admintest/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/admintest/dist/css/AdminLTE.min.css">


    <div class="container-fluid ">

        <div class="col-lg-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Reservar fechas</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['method' =>'POST', 'action'=>'CamerasController@store', ]) !!}
                <div class="form-horizontal">
                    <div class="box-body">


                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nombre del tour</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" placeholder="Nombre del tour" type="text" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Descripcion</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="description" name="description" placeholder="descripcion" type="text" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nameTour" class="col-sm-2 control-label">Usuario</label>

                            <div class="col-sm-10">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start_date" class="col-sm-2 control-label">Fecha Inicio</label>

                            <div class="col-sm-10 ">
                                {{ Form::date('start_date', \Carbon\Carbon::now())  }}
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="end_date" class="col-sm-2 control-label">Fecha Fin</label>

                            <div class="col-sm-10 ">
                                {{ Form::date('end_date', \Carbon\Carbon::now())  }}
                            </div>

                        </div>




                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


                        <a href="{{url('cameras')}}" class="btn btn-default" role="button">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Alta</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
                {!! Form::close() !!}
            </div>


        </div>


    </div>



    <!--script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->


@endsection

