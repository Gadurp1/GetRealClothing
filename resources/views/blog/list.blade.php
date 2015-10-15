@extends('welcome')
@section('content')


      
        <!-- Latest blog posts start -->
        <section id="news" class="module-small">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="module-title font-alt">Latest Posts</h2>
                        <div class="module-subtitle font-serif">
	Check Out What Get Real & Some of Our Homies Have Been Up to                        </div>

                    </div>

                </div><!-- .row -->

                <div class="col-md-8">

                    <!-- Post item start -->
                    @if(\Auth::guest())
                    @foreach($blog->where('status','publish') as $item)
                        <div class="mb-5">
                                <a href="blog/{{$item->slug}}"><img class="" src="{{asset($item->image)}}" alt=""></a>
                            <div class=" font-alt">
                                <h2 class=""><a href="blog/{{$item->slug}}">{{$item->name}}</a></h2>
                                <div class="post-meta">
                                    By <a href="#"></a> |{{$item->created_at}} | 3 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                            </div>
                            <div class="post-more">
                                <a href="blog/{{$item->slug}}" class="more-link">Read more</a>
                            </div>

                    	</div>
                    	<br></br>
                    	<!-- Post item end -->
                    	@endforeach

                        @else
                        
			@foreach($blog as $item)
                        <div class="mb-5">
                                <a href="blog/{{$item->slug}}"><img class="" src="{{asset($item->image)}}" alt=""></a>
                            <div class=" font-alt">
                                <h2 class=""><a href="blog/{{$item->slug}}">{{$item->name}}</a></h2>
                                <div class="post-meta">
                                	
                                	@if($item->status == 'draft')

                            			<label class="label label-danger">Draft</label>

                        		@endif
                        		
                                    By <a href="#"></a> |{{$item->created_at}} | 3 Comments
                                    By <a href="#"></a> |{{$item->created_at}} | 3 Comments
                                </div>
                            </div>
                            <div class="post-entry">
                            </div>
                            <div class="post-more">
                                <a href="blog/{{$item->slug}}" class="more-link">Read more</a>
                            </div>

                    	</div>
                    	<br></br>
                    	{!! str_replace('/?', '?', $blog->render()) !!} 
                    	<!-- Post item end -->
                    @endforeach
                        @endif

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
                      

          

                    </div>
                    <!-- Sidebar column end -->
            </div>
        </section>
        <!-- Latest blog posts end -->
    @stop
      
