<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ _('HEADER') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ _('Home') }}</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ _('Link') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ _('Multi level Link') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ _('Sample Link 01') }}</a></li>
                    <li><a href="#">{{ _('Sample Link 02') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
