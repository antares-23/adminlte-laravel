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
                        <div class="container-fluid ">

                            <div class="form-group">
                                {!! Form::label('name','Nombre de Subdominio') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('url','Url') !!}
                                {!! Form::text('url',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('user_id','Cliente') !!}
                                {!! Form::select('user_id',$users,null ,array('placeholder' => 'Seleccione Cliente','class' => 'form-control')) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('total_size','Espacio Asignado  (GB)') !!}
                                {!! Form::number('total_size',null,['class'=>'form-control']) !!}

                            </div>

                            <div class="form-group">
                                {!! Form::label('name','Fecha de Inicio') !!}
                                {!! Form::date('date_start', \Carbon\Carbon::now(),['class'=>'form-control'])  !!}
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

