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
            <h3 class="box-title">Alta de Tour</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">

                <div class="form-group">
                    <label for="nameTour" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="nameTour" placeholder="Nombre del tour" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="urlTour" class="col-sm-2 control-label">Url</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="urlTour" placeholder="url" type="text">
                    </div>
                </div>



                <div class="form-group">
                    <label for="nameTour" class="col-sm-2 control-label">Usuario</label>

                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nameTour" class="col-sm-2 control-label">Fecha Inicio</label>

                    <div class="col-sm-10 ">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>

                        <input class="form-control pull-right" id="datepicker" type="text">
                    </div>

                </div>

                <!--div class="form-group">
                    <label>Fecha Inicio</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control pull-right" id="datepicker" type="text">
                    </div-->
                    <!-- /.input group -->
                </div>

        </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Alta</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Date picker</h3>
                </div>
                <div class="box-body">
                    <!-- Date -->
                    <div class="form-group">
                        <label>Date:</label>

                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!-- /.col (right) -->
    </div>



</div>





    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- bootstrap datepicker -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>



    <script>
        jQuery(function () {


            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })


        })
    </script>
@endsection



<!--html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>

<p>Date: <input type="text" id="datepicker"></p>


</body>
</html-->