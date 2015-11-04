<!DOCTYPE html>
<html>
<head>
@include('partials.htmlheader')
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|               | skin-blue-light                         |
|               | skin-black-light                        |
|               | skin-purple-light                       |
|               | skin-yellow-light                       |
|               | skin-red-light                          |
|               | skin-green-light                        |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue">
<div class="wrapper">

    {{-- @include('partials.mainheader.full') --}}
    @include('partials.mainheader.full')

    {{-- @include('partials.sidebar.full') --}}
    @include('partials.sidebar.simple')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('partials.controlsidebar')

    @include('partials.footer')

</div><!-- ./wrapper -->

@include('partials.scripts')

</body>
</html>
