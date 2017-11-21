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
                    <h3 class="box-title">Crear Subdominio</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['method' =>'POST', 'action'=>'SubdomainsController@store', ]) !!}
                <div class="form-horizontal">
                    <div class="box-body">


                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nombre de Subdominio</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" placeholder="Nombre del subdominio" type="text" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">Url</label>

                            <div class="col-sm-10">
                                <input class="form-control" id="url" name="url" placeholder="url" type="text" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nameTour" class="col-sm-2 control-label">Usuario</label>

                            <div class="col-sm-10">
                                <select class="form-control" id="user_id" name="user_id" >
                                    <option>Seleccione un cliente</option>
                                    @if(count($users)>1)
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    @else
                                        <option value="{{$users->id}}">{{$users->name}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('total_size','Espacio Asignado  (GB)') !!}
                            {!! Form::number('total_size',null,['class'=>'form-control']) !!}

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

                        @if (count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif


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

