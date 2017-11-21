@extends('adminlte::layouts.app')



@section('main-content')

    <div class="col-md-8">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Alta de usuario</h3>
        </div>
        <div class="box-body">
            <div class="container-fluid ">

                {!! Form::open(['method' =>'POST', 'action'=>'UsersController@store', ]) !!}
                <div class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('name','Nombre de cliente') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','Email') !!}
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password','Password') !!}
                            {!! Form::text('password',null,['class'=>'form-control']) !!}
                        </div>



                        <div class="form-group">
                            {!! Form::submit('Agregar Cliente',['class'=>'btn btn-primary']) !!}
                            {{csrf_field()}}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

        </div>
    </div>
    </div>

@endsection