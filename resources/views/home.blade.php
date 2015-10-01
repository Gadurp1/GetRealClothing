@extends('welcome')
@section('content')


<!-- Home start -->
    <section id="home"  class="module-small bg-dark-30" data-background="assets/images/section-13.jpg">

        <div class="hs-caption">
            <div class="caption-content">
                <div class="hs-title-size-1 font-alt mb-30">
                 <img src="{{ asset('assets/images/logo.png')}}">
                </div>
                <div class="hs-title-size-4 font-alt mb-40">
                   Get Real Clothing
                </div>
                <a href="#about" class="section-scroll btn btn-border-w btn-round"><i  style="font-size:24px"  class="fa fa-fw"></i></a>
                <a href="#about" class="section-scroll btn btn-border-w btn-round"><i style="font-size:24px" class="fa fa-fw"></i></a>

                <a href="#about" class="section-scroll btn btn-border-w btn-round"><i style="font-size:24px" class="fa fa-fw"></i></a>

            </div>
        </div>

    </section >
    <!-- Home end -->


    <!-- Wrapper start -->
    <div class="main">


        <!-- Divider -->

      
        <!-- Portfolio start -->
        <section id="works" class="module-small pb-0">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3">

                        <h2 class="module-title font-alt">What's New</h2>

                    </div>

                </div><!-- .row -->

              

            </div><!-- .container -->

            <!-- Portfolio list start -->
            <ul id="works-grid" class="works-grid works-grid-gut works-grid-3 works-hover-w">
                    
				@foreach($blog as $blog_item)
	                <!-- Portfolio item start -->
	                <li class="work-item marketing photography">
	                    <a href="blog/{{$blog_item->id}}">
	                        <div class="work-image">
	                            <img class="col-md-12"  src="{{ asset($blog_item->image)}}" alt="">
	                        </div>
	                        <div class="work-caption font-alt">
	                            <h3 class="work-title">{{$blog_item->name}}</h3>
	                            <div class="work-descr">
	                                Marketing
	                            </div>
	                        </div>
	                    </a>
	                </li>
	                <!-- Portfolio item end -->
				@endforeach





            </ul>
            <!-- Portfolio list end -->

        </section>
        <!-- Portfolio end -->

      
        <!-- Latest blog posts start -->
        <section id="news" class="module-small">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="module-title font-alt">Insta Posts</h2>
                        <div class="module-subtitle font-serif">
                        	Check Out What We're Up to On the Gram
                        </div>

                    </div>

                </div><!-- .row -->

                <div class="col-md-8 col-sm-offset-2">

                                      <!-- Widget start -->
                        <div class="widget">

<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/7e34ab569710225202d940c1c99cf31da2a3a59c.html" id="instansive_7e34ab5697" name="instansive_7e34ab5697"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

                        </div>
                    
	
                </div><!-- .row -->


            </div>
        </section>
        <!-- Latest blog posts end -->
    @stop
      