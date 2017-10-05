@extends('adminlte::layouts.app')
@section('main-content')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-8">


                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cargar foto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <div class="box-body">

                        {!! Form::open(['method' => 'POST', 'action'=>'PhotosController@store', 'files'=>true]) !!}


                            <div class="form-group" style="padding-bottom: 40px;">
                                <div class="col-lg-12">

                                    {!! Form::file('files[]', ['class'=>'form-control','multiple' => 'multiple' ]) !!}
                                </div>
                            </div>

                        {{ Form::hidden('photo_id', $photos['id'], array('id' => 'photo_id')) }}
                            <div class="form-group">
                                <div class="col-lg-12">
                                    {!! Form::submit('create',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>




                        {!! Form::close() !!}

                    </div>

                    <div class="box-footer">
                       <p>*Solo se admite formato .jpg, tamaño maximo 1MB</p>
                        @if (count($errors) > 0)
                           Formato o nombre de archivo incorrecto
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
        @foreach($photos['photos'] as $photo)
            <div class="col-md-1" style="padding-bottom: 20px;">
                <img src="/images/{{$photo->filename}}"  style="width: 100px;">
            </div>
        @endforeach
        </div>
    </div>


@endsection