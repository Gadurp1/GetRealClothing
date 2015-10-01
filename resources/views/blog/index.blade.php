@extends('welcome')
@section('content')


<!-- Home start -->
    <section id="home" style="padding:0px"  class="home-section bg-dark-30" data-background="assets/images/section-13.jpg">

        <!-- Youtube player start-->
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=PeNfUOhCLaw', containment:'.home-section', startAt:5, mute:true, autoPlay:true, loop:true, opacity:.6, showControls:false, showYTLogo:false, vol:25}"></div>
        <!-- Youtube player end -->

        <!-- Youtube controls start-->
        <div class="video-controls-box">
            <div class="container">
                <div class="video-controls">
                    <a id="video-volume" class="fa fa-volume-up" href="#">&nbsp;</a>
                    <a id="video-play" class="fa fa-pause" href="#">&nbsp;</a>
                </div>
            </div>
        </div>
        <!-- Youtube controls end -->

        <div class="hs-caption">
            <div class="caption-content">
                <div class="hs-title-size-1 font-alt mb-30">
                    Hello & welcome
                </div>
                <div class="hs-title-size-4 font-alt mb-40">
                    We are Rival
                </div>
                <a href="#about" class="section-scroll btn btn-border-w btn-round">Learn More</a>
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

                <!-- Portfolio item start -->
                <li class="work-item illustration webdesign">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img class="col-md-12"  src="https://pbs.twimg.com/profile_images/574633641784971264/7Y1q3goj.jpeg" alt="">
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Corporate Identity</h3>
                            <div class="work-descr">
                                Illustration
                            </div>
                        </div>
                    </a>
                </li>
                <!-- Portfolio item end -->

                <!-- Portfolio item start -->
                <li class="work-item marketing photography">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img class="col-md-12"  src="assets/images/IMG_0038.jpg" alt="">
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Watch this years Stoop Contest!!!</h3>
                            <div class="work-descr">
                                Marketing
                            </div>
                        </div>
                    </a>
                </li>
                <!-- Portfolio item end -->

                <!-- Portfolio item start -->
                <li class="work-item illustration photography">
                    <a href="portfolio-single-1.html">
                        <div class="work-image">
                            <img class="col-md-12" src="assets/images/IMG_0018.jpg" alt="">
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">Check Out the Stoop Gallery</h3>
                            <div class="work-descr">
                                Illustration
                            </div>
                        </div>
                    </a>
                </li>
                <!-- Portfolio item end -->



            </ul>
            <!-- Portfolio list end -->

        </section>
        <!-- Portfolio end -->

      
        <!-- Latest blog posts start -->
        <section id="news" class="module-small">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="module-title font-alt">Latest Posts</h2>
                        <div class="module-subtitle font-serif">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                        </div>

                    </div>

                </div><!-- .row -->

                <div class="col-md-8">

                    <!-- Post item start -->
                    

                        <div class="">
                                <a href="blog-single-left.html"><img class="col-md-12" src="assets/images/IMG_0018.jpg" alt=""></a>
                            <div class=" font-alt">
                                <h2 class=""><a href="blog-single-left.html">Our trip to the Alps</a></h2>
                                <div class="post-meta">
                                    By <a href="#">Mark Stone</a> | 23 November | 3 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more">
                                <a href="blog-single-right.html" class="more-link">Read more</a>
                            </div>

                    </div>
                    <!-- Post item end -->

                    <!-- Post item start -->
                    

                        <div class="">
                            <div class="col-md-12">
                                <a href="blog-single-left.html"><img class="col-md-12" src="assets/images/post-2.jpg" alt=""></a>
                            </div>
                            <div class=" font-alt">
                                <h2 class="post-title"><a href="blog-single-left.html">Shore after the tide</a></h2>
                                <div class="post-meta">
                                    By <a href="#">Andy River</a> | 11 November | 4 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more">
                                <a href="blog-single-right.html" class="more-link">Read more</a>
                            </div>

                    </div>
                    <!-- Post item end -->

                    <!-- Post item start -->
                    

                        <div class="">
                            <div class="col-md-12">
                                <a href="blog-single-left.html"><img class="col-md-12" src="assets/images/post-3.jpg" alt=""></a>
                            </div>
                            <div class=" font-alt">
                                <h2 class="post-title"><a href="blog-single-left.html">We in New Zealand</a></h2>
                                <div class="post-meta">
                                    By <a href="#">Dylan Woods</a> | 5 November | 15 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more">
                                <a href="blog-single-right.html" class="more-link">Read more</a>
                            </div>

                    </div>
                    <!-- Post item end -->

                </div><!-- .row -->

<!-- Sidebar column start -->
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">

                        <!-- Widget start -->
                        <div class="widget">
                            <form role="form">
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Widget end -->
                    
                        <!-- Widget start -->
                        <div class="widget">
          <a class="twitter-timeline" href="https://twitter.com/GetRealClothing" data-widget-id="648675032642662400">Tweets by @GetRealClothing</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  </div>
                        <!-- Widget end -->
                    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular posts</h5>
                            <ul class="widget-posts">
                    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="assets/images/rp-1.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Designer Desk Essentials</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            23 November
                                        </div>
                                    </div>
                                </li>
                    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="assets/images/rp-2.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Realistic Business Card Mockup</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            15 November
                                        </div>
                                    </div>
                                </li>
                    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="assets/images/rp-3.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Eco bag Mockup</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            5 November
                                        </div>
                                    </div>
                                </li>
                    
                                <li class="clearfix">
                                    <div class="widget-posts-image">
                                        <a href="#"><img src="assets/images/rp-4.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title">
                                            <a href="#">Bottle Mockup</a>
                                        </div>
                                        <div class="widget-posts-meta">
                                            1 November
                                        </div>
                                    </div>
                                </li>
                    
                            </ul>
                        </div>
                        <!-- Widget end -->
                    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Tags</h5>
                            <div class="tags font-serif">
                                <a href="#" rel="tag">Blog</a>
                                <a href="#" rel="tag">Photo</a>
                                <a href="#" rel="tag">Video</a>
                                <a href="#" rel="tag">Image</a>
                                <a href="#" rel="tag">Minimal</a>
                                <a href="#" rel="tag">Post</a>
                                <a href="#" rel="tag">Theme</a>
                                <a href="#" rel="tag">Ideas</a>
                                <a href="#" rel="tag">Tags</a>
                                <a href="#" rel="tag">Bootstrap</a>
                                <a href="#" rel="tag">Popular</a>
                                <a href="#" rel="tag">English</a>
                            </div>
                        </div>
                        <!-- Widget end -->
                    

                    
                        <!-- Widget start -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                        <!-- Widget end -->

                    </div>
                    <!-- Sidebar column end -->
            </div>
        </section>
        <!-- Latest blog posts end -->
    @stop
      