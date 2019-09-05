<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QUAD INFO LTD - software service provider </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include ('frontend.partials.css')


 </head>
 
  <body>
  <!--headnav start-->
   @include ('frontend.partials.headnav')
  <!-- END headnav -->
          @yield('content')
             
         @include ('frontend.partials.footer')
  <!-- partial -->
     
  <!-- row-offcanvas ends -->
    
  <!-- page-body-wrapper ends -->
  
  <!-- container-scroller -->

  <!-- plugins:js -->
@include ('frontend.partials.script')

  </body>
</html>