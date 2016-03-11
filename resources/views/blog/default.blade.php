<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US" />
        <meta property="og:title" content="{{$blog->name}}" />
        <meta property="og:description" content="{!! $blog->content !!}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{\Request::url()}}"
        <meta property="article:author" content="https://www.facebook.com/KeepHavingAGoodDay" />
        <meta property="article:publisher" content="https://www.facebook.com/KeepHavingAGoodDay" />
        <meta property="og:image" content="{{asset($blog->image)}}" />
        <title>{{$blog->name}}</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />

            <!-- Vendor CSS -->
        <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/et-line-font.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.css')}}" rel="stylesheet">
 <link href="{{ asset('vendors/bower_components/summernote/dist/summernote.css')}}" rel="stylesheet">


    </head>
    <body>

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

                    <div class="col-sm-6">
                        <p class="copyright font-alt">© 2015 <a href="index.html">GET REAL.</a> All Rights Reserved.</p>
                    </div>

                    <div class="col-sm-6">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.min.js')}}"></script>
 <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <!-- include libraries BS3 -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />


<!-- include summernote css/js-->
        <script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert2.min.js')}}"></script>

<script src="{{ asset('vendors/bower_components/summernote/dist/summernote.js')}}"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-560b5c2d52b4b2a8" async="async"></script>
