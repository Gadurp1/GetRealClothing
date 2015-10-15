@extends('welcome')

@section('content')



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-560b5c2d52b4b2a8" async="async"></script>




        <!-- Post single start -->
        <section class="module-small">
            <div class="container">

                <div class="row">

                    <!-- Content column start -->
                    <div class="col-md-8 col-md-offset-2" >

        

                        <section class="module-small pb-0 boxed">

                                <!-- Portfolio list start -->
                                <ul id="works-grid" class="works-grid works-grid-masonry works-grid-3 works-hover-w">

                                @foreach($blog as $photo)
                                <!-- Gallery item start -->
                                <li class="work-item illustration webdesign" style="">
                                 <div class="gallery-item" style="margin:0px;padding:px">
                                     <a href="{{url('photos/'.$photo->id.'/edit')}}" class=""  style="margin:0px;padding:px;">
                                        <div class="work-image">
                                          <img src="{{asset($photo->path)}}">
                                        </div>
                                        <div class="work-caption font-alt">comp
                                            <h3 class="work-title">Edit</h3>
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





