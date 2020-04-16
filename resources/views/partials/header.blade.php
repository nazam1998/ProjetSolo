<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p class="topcontact"><i class="icon-phone"></i> +62 088 999 123</p>
                </div>
                <div class="span6">

                    <ul class="social-network">
                        <li><a href="#" data-placement="bottom" title="Facebook"><i
                                    class="icon-facebook icon-white"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Twitter"><i
                                    class="icon-twitter icon-white"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Linkedin"><i
                                    class="icon-linkedin icon-white"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Pinterest"><i
                                    class="icon-pinterest  icon-white"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Google +"><i
                                    class="icon-google-plus icon-white"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Dribbble"><i
                                    class="icon-dribbble icon-white"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="container">


        <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="" /></a>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="active">
                                    <a href="index.html"><i class="icon-home"></i>  Home</a>
                                </li>
                                
                                <li>
                                    <a href="#featured">Features </a>
                                </li>
                                <li>
                                    <a href="#content">Pricing </a>
                                </li>
                                <li>
                                    <a href="#testimonials">Testimonials </a>
                                </li>
                                <li>
                                    <a href="#works">Works </a>
                                </li>
                                <li>
                                    <a href="#footer">NewsLetter </a>
                                </li>
                                @guest
                                <li>
                                    <a href="{{route('login')}}">Se Connecter</a>
                            </li>
                            @else
                            @can('admin', App\User::class)

                            <li class="dropdown">
                                <a href="{{route('admin')}}">Admin<i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a href="{{route('register')}}">Register</a>
                            </li> --}}
                            <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>

                            </ul>
                            </li>
                            @endcan
                            @endguest
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
