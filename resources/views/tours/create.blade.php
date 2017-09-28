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
                    <h3 class="box-title">Crear Tour</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['method' =>'POST', 'action'=>'ToursController@store', ]) !!}
                <div class="form-horizontal">
                    <div class="box-body">


                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" placeholder="Nombre del tour" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">Url</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="url" name="url" placeholder="url" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_size" class="col-sm-2 control-label">Espacio Asignado</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="total_size" name="total_size" placeholder="Tamaño máximo total" type="number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nameTour" class="col-sm-2 control-label">Usuario</label>

                            <div class="col-sm-10">
                                <select class="form-control" id="user_id" name="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date_start" class="col-sm-2 control-label">Fecha Inicio</label>

                            <div class="col-sm-10 ">
                                {{ Form::date('date_start', \Carbon\Carbon::now())  }}
                            </div>
                        </div>



                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <a href="/tours" class="btn btn-default" role="button">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Alta</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
                {!! Form::close() !!}
            </div>


        </div>


    </div>



    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


@endsection

