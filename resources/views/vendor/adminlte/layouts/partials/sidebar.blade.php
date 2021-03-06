<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->

                </div>
            </div>
        @endif

        <!-- search form (Optional) -->

        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <!--ul class="sidebar-menu">
            <!--- el resto del código ->
            <li><a href="{!! url('products')  !!}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.products') }}</span></a></li>
        </ul-->

        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <!--li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li-->

            <!--li ><a href="#"><i class='fa fa-link'></i> <span>Visitas Virtuales</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>Usuarios</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>Alquiler</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>Facturación</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>Información y resumen</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>Tickets</span></a></li-->

            <li ><a href="{{url('users')}}"><i class='fa fa-link'></i> <span>Cliente</span></a></li>
            <li><a href="{{url('servers')}}"><i class='fa fa-link'></i> <span>Administración de Espacio</span></a></li>
            <li ><a href="{{url('subdomains')}}"><i class='fa fa-link'></i> <span>Subdominios</span></a></li>
            <li ><a href="{{url('tours')}}"><i class='fa fa-link'></i> <span>Tours</span></a></li>
            <li ><a href="{{url('cameras')}}"><i class='fa fa-link'></i> <span>Reserva de equipo</span></a></li>



            <!--li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li-->



            <!--li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li-->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
