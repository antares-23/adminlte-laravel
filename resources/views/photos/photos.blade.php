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

                        <div class="form-group">

                            <div class="form-group">
                                {{ Form::hidden('photo_id', $photos['id'], array('id' => 'photo_id')) }}
                                {!! Form::file('files[]', ['class'=>'form-control','multiple' => 'multiple' ]) !!}
                            </div>


                            {!! Form::submit('create',['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

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