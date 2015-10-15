@extends('blog.default')

@section('content')


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Are You Sure???</h4>
      </div>
      <div class="modal-body">

       {!! Form::open([ 'method'  => 'delete', 'route' => [ 'blog.destroy', $blog->id ] ]) !!}

            <button class="btn btn-lg btn-block btn-danger" type="submit">Yes, Delete Post!</button>

        {!! Form::close() !!}
      </div>

    </div>

  </div>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-560b5c2d52b4b2a8" async="async"></script>

   <!-- Header section start -->
    <section id="home" class="module-small home-parralax bg-dark-30" data-background="@foreach($blog->photos->where('status',2) as $photos ){{asset(''.$photos->path.'')}}@endforeach">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6 col-sm-offset-3 text-center ">
                        <h1 class="module-title font-alt"><strong>{{$blog->name}}</strong></h1>
           
                        @if(\Auth::guest())


                        @else
                            <a href="{{$blog->id}}/edit" class=" btn btn-danger">Edit Post</a>
                            <a href="../photos/{{$blog->id}}" class=" btn btn-danger">Edit Photos</a>


                            <a class=" btn btn-danger" data-toggle="modal" data-target="#myModal">Delete Post</a>


                        @endif
                    </div>

                </div><!-- .row -->

            </div>
        </section>


        <!-- Post single start -->
        <section class="module-small">
            <div class="container">

                <div class="row">

                    <!-- Content column start -->
                    <div class="col-md-8 col-md-offset-2" >

        

                        <!-- Post start -->
                        <div class="post">

                            <div class="post-thumbnail">

                                @if($blog->video_url)
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{$blog->video_url}}" class="col-md-12 "></iframe>
                                    </div>
                                @endif

                            </div>
                            <div class="post-entry">
                                {!! $blog->content !!}      

                            <hr>
                            <!-- Portfolio start -->
                            <section class="module-small pb-0 boxed">

                                <!-- Portfolio list start -->
                                <ul id="works-grid" class="works-grid works-grid-masonry works-grid-3 works-hover-w">

                                @foreach($blog->photos as $photo)
                                <!-- Gallery item start -->
                                <li class="work-item illustration webdesign" style="margin:0px;padding:px;">
                                 <div class="gallery-item" style="margin:0px;padding:px;">
                                     <a href="{{asset($photo->path)}}" class="gallery"  style="margin:0px;padding:px;">
                                        <div class="work-image">
                                          <img src="{{asset($photo->path)}}">
                                        </div>
                                        <div class="work-caption font-alt">comp
                                            <h3 class="work-title">Launch Slideshow</h3>
                                            <div class="work-descr">
                                               
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </li>
                                @endforeach     
                                </ul>
                            </section>                                                                            
                            </div>



  
                        </div>
                        <!-- Post end -->

                        <!-- Comments start -->
                        <div class="comments">
                          <div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES * * */
                                var disqus_shortname = 'getrealsk8';
                                
                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                        </div>
                    <!-- Content column end -->
                    </div>
                </div></div></div></div>    
        <!-- Widgets end -->
    
        <!-- Divider -->
        <hr class="divider-d">
        <!-- Divider -->
    @stop





