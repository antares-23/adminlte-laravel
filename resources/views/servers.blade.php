@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid ">

        <!--div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios Activos</span>
                        <span class="info-box-number">2,000</span>
                    </div>

                </div>

            </div-->


        </div>


        @foreach($servers as $server)

            <div class="row">
                <div class="col-md-12">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{$server->name}}</h3>
                        </div>
                        <div class="box-body">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">{{$server->url}}</span>
                                    {{$server->occupied_size}} de {{$server->total_size }}
                                    <span class="info-box-number">{{$server->total_size - $server->occupied_size }}</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: {{ ($server->occupied_size / $server->total_size)*100 }}%"></div>
                                    </div>
                                    <span class="progress-description">

                                      Usuario: {{$server->user->name}}
                                </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
            </div>


        @endforeach






        <!--div class="box box-primary">


            <div class="box-header with-border">
                <h3 class="box-title">Alta de Archivos</h3>
            </div>


                <div class="box-body">

                    {!! Form::open(['method' => 'POST', 'action'=>'ServersController@store', 'files'=>true]) !!}

                    <div class="form-group">

                        {!! Form::file('files[]', ['class'=>'form-control','multiple' => 'multiple' ]) !!}
                        {!! Form::submit('create',['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>

                <div class="box-footer">
                </div>
        </div-->



    </div>

@endsection