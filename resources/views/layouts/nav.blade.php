<!-- NAVBAR VAN BOOTSRAP -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('img/bl.png') }}" style="margin-top:-15px;width:50px;" ></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                <li><a href="pages/contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorie <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Comming soon :)</a></li>
                        <li><a href="#">Comming soon :)</a></li>
                        <li><a href="#">Comming soon :)</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                @if (Route::has('login'))
                    <li>
                        @if (Auth::check())
                            <a href="{{ url('posts/create') }}">Nieuwe post</a>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welkom, <u>{{ Auth::user()->name }}</u><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('posts.index') }}">Mijn posts</a></li>
                            <li><a href="{{ route('categories.index') }}">Categorieen</a></li>
                            <li><a href="#">Profiel</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        </ul>
                    </li>

                @else

                    <li><a href="#" data-toggle="modal" class="glyphicon glyphicon-user" data-target="#login-modal"></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#register-modal" class="glyphicon glyphicon-copy"></a></li>

                    @endif
                    </li>
                @endif

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- EINDE NAVBAR -->