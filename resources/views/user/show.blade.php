@extends('adminlte::layouts.app')
@section('main-content')
    <div class="container-fluid ">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{$client->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p>{{$client->email}}</p>
                <p><a href="{{route('photos.show',$client->id)}}" class="btn btn-default" role="button">Alta de Imagenes</a>
                <a href="{{url('subdomains')}}" class="btn btn-default" role="button">Info de Subdominio</a>
                <a href="#" class="btn btn-danger" role="button">Alta de datos de Facturación</a></p>
            </div>
        </div>



    </div>

@endsection