@extends('adminlte::layouts.app')
@section('main-content')
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Alta de usuario</h3>
            </div>
            <div class="box-body">
                <div class="container-fluid ">
                    {!! Form::model($client, ['method'=>'PATCH', 'action'=>['UsersController@update', $client->id]]) !!}

                    <div class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name','Nombre de cliente') !!}
                                {!! Form::text('name',$client->name,['class'=>'form-control']) !!}
                                {{csrf_field()}}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Email') !!}
                                {!! Form::text('email',$client->email,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{url('users')}}" class="btn btn-default" role="button">Cancel</a>
                            {!! Form::submit('Editar Cliente',['class'=>'btn btn-primary pull-right']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

@endsection