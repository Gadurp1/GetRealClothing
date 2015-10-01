@extends('default')
@section('content')


      
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
                    
                    @foreach($blog as $item)
                        <div class="mb-5">
                                <a href="blog/{{$item->slug}}"><img class="" src="{{asset($item->image)}}" alt=""></a>
                            <div class=" font-alt">
                                <h2 class=""><a href="blog/{{$item->slug}}">{{$item->name}}</a></h2>
                                <div class="post-meta">
                                    By <a href="#">Mark Stone</a> |{{$item->created_at}} | 3 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more">
                                <a href="blog/{{$item->slug}}" class="more-link">Read more</a>
                            </div>

                    	</div>
                    	<br></br>
                    	<!-- Post item end -->
                    @endforeach


                    

                    
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
                            <h5 class="widget-title font-alt">Check Use Out On Instagram</h5>

						<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script>
						<iframe src="//instansive.com/widgets/3a9e0d6b9b6e5ff29ba9f020ea1b7018b957feb6.html" id="instansive_3a9e0d6b9b" name="instansive_3a9e0d6b9b"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                        <!-- Widget start -->
                        </div>
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
      
