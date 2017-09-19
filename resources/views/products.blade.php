@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid ">

        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios Activos</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


        </div>

        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sitio 1</h3>
                    </div>
                    <div class="box-body">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">/home/sitio1</span>
                                <span class="info-box-number">550 MB</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 55%"></div>
                                </div>
                                <span class="progress-description">
                                    Commments...
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12 ">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sitio 2</h3>
                    </div>
                    <div class="box-body">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">/home/sitio2</span>
                                <span class="info-box-number">350 MB</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 35%"></div>
                                </div>
                                <span class="progress-description">
                                    Commments...
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12 ">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sitio 3</h3>
                    </div>
                    <div class="box-body">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ios-cloud-upload-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">/home/sitio3</span>
                                <span class="info-box-number">350 MB</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 15%"></div>
                                </div>
                                <span class="progress-description">
                                    Commments...
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>




        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-header with-border">
                <h3 class="box-title">Alta de Archivos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input id="exampleInputFile" type="file">


                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>



    </div>

@endsection