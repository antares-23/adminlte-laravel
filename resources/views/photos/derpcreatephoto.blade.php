@extends('adminlte::layouts.app')



@section('main-content')



    <!--link rel="stylesheet" href="http://localhost/admintest/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/admintest/dist/css/AdminLTE.min.css"-->


    <div class="container-fluid ">

        <div class="col-lg-8">



            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Cargar  sfoto</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                <div class="box-body">



                    <div class="form-group">
                        {!! Form::open(['method' => 'POST', 'action'=>'PhotosController@store', 'files'=>true]) !!}


                        <div class="form-group">
                            {{ Form::hidden('photo_id', $id, array('id' => 'photo_id')) }}
                            {!! Form::file('files[]', ['class'=>'form-control','multiple' => 'multiple' ]) !!}
                        </div>
derp

                        <div class="form-group">
                            {!! Form::submit('create',['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>

                    <div class="box-footer">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!--script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->


@endsection

