
@extends('adminlte::layouts.app')
@section('main-content')

    <div class="container-fluid ">

        <div class="row">
            <a href="{{url('cameras/create')}}" class="btn btn-info" role="button">Reservar Equipo</a>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Calendario</h3>
                    </div>

                    <div class="box-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>

        </div>


    </div>




    <script src="{{asset('fullcalendar/lib/jquery.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [

                        @foreach($cameras as $camera)
                    {
                        title : '{{ $camera->name }}',
                        start : '{{ $camera->start_date }}',
                        end: '{{ $camera->end_date }}',
                        url : '{{ route('cameras.show', $camera->id) }}'
                    },
                    @endforeach

                ]
            })
        });

    </script>

@endsection
