
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Get Real Clothing</title>

            <!-- Vendor CSS -->
        <link href="{{ asset('assets/css/simpletextrotator.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/et-line-font.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/flexslider.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.css')}}" rel="stylesheet">

                <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet">
        <script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.min.js')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

<script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.min.js')}}"></script>
 <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
  <!-- include libraries BS3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
 
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/blackboard.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
  
<!-- include summernote css/js-->
        <link href="{{ asset('vendors/bower_components/summernote/dist/summernote.css')}}" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.js"></script>


    </head>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=495527587195886";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    @include('partials.header')
    <!-- Navigation end -->

    <!-- Wrapper start -->
    <div class="main">
            @if (Session::has('flash_message'))

               <script>
                    swal({   title: "Yeah Bud!",   text: "{{session('flash_message')}}",   type: "success",   confirmButtonText: "Cool" });
               </script>
                
               
            @endif
        
            @if(Session::has('flash_message_link'))
                <script>
                swal({   type: "success",  
                    html:     "{{session('flash_message_link')}}  <a></a>",
                     showCancelButton: false,
                        confirmButtonColor: 'blue',   
                        cancelButtonColor: 'fff',   });
                </script>
            @endif
@yield('content')
    <!-- Footer start -->
        <footer class="footer bg-dark">
            <div class="container">
    
                <div class="row">
    
                    <div class="col-sm-3">
                        <p class="copyright font-alt">© 2015 <a href="index.html">GET REAL.</a> All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="fb-follow" data-href="https://www.facebook.comKeepHavingAGoodDay" data-layout="standard" data-show-faces="true"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                         
                        </div>
                    </div>
    
                </div><!-- .row -->
    
            </div>
        </footer>
        <!-- Footer end -->
    
    </div>
    <!-- Wrapper start -->
    
    <!-- Scroll-up -->
    <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>
  
    @include('partials.footer')
    </body>
  </html>
