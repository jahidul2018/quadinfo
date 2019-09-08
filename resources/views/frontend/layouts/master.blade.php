<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/dotcreative/index_singlepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 16:16:49 GMT -->
<head>
  <title>quadinfo ltd || IT COMPANY</title>
 
  <meta charset="utf-8">
  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta name="description" content=" QUADINFO LTD is a leading Software development company in bangladesh.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

@include('frontend.partials.css')

  <!--[if lt IE 9]>
    <script src="js/vendor/html5shiv.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <![endif]-->

</head>

<body>
  <!--[if lt IE 9]>
    <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
  <![endif]-->

  <div class="preloader">
    <div class="preloader_image"></div>
  </div>

  <!-- search modal -->
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
      <form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
        <div class="form-group">
          <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
        </div>
        <button type="submit" class="btn">Search</button>
      </form>
    </div>
  </div>

  <!-- Unyson messages modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
      <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
      <!--
    <ul class="list-unstyled">
      <li>Message To User</li>
    </ul>
    -->

    </div>
  </div>
  <!-- eof .modal -->

  <!-- wrappers for visual page editor and boxed version of template -->
  <div id="canvas">
    <div id="box_wrapper">

      <!-- template sections -->

      <!--topline section visible only on small screens|-->
      @include('frontend.partials.headnav')

        @yield('content')

           @include('frontend.partials.footer')
       


    </div>
    <!-- eof #box_wrapper -->
  </div>
  <!-- eof #canvas -->

   @include('frontend.partials.script')

</body>


<!-- Mirrored from webdesign-finder.com/html/dotcreative/index_singlepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 16:16:49 GMT -->
</html>