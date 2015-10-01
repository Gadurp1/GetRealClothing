    <!-- Navigation start -->
    <nav class="navbar navbar-custom  navbar-fixed-top" role="navigation">

        <div class="container">
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('')}}">Get Real.</a>
            </div>
    
            <div class="collapse navbar-collapse" id="custom-collapse">
    
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{ url('Recent-Posts')}}"><span aria-hidden="true" class="icon-megaphone"></span><strong>  Feed</strong></a></li>
                    
                        
                        @if(\Auth::guest())

                            <li><a href="{{ url('auth/login')}}"><span aria-hidden="true" class="icon-megaphone"></span><strong>  Login</strong></a></li>

                        @else
                        
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{\Auth::user()->name}}</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('blog/create')}}">New Post</a></li>
                                    <li><a href="{{ url('User/Profile/')}}">Edit Profile</a></li>
                                    <li><a href="{{ url('auth/logout')}}">Logout</a></li>

                                </ul>
                            </li>
                        @endif


                </ul>
            </div>
    
        </div>

    </nav>