<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   @include('backend.partials.css')
</head>

<body>
    <!-- Left Panel -->
  @include('backend.partials.aside')
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('backend.partials.header')

        <!-- /#header -->
        <!-- All Information  -->
         <div class="content">
        @include('backend.partials.allamount')
        <!-- /All Information -->
        <!-- Content -->
        @yield('content')
          </div>
        <!-- /.content -->
        <div class="clearfix"></div>

        <!-- Footer -->
        @include('backend.partials.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
  @include('backend.partials.scripts')
  @yield('footer_scripts')
</body>
</html>
