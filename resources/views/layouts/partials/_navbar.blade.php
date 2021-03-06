<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Reddit Clone</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ action('PostsController@index') }}">Posts</a></li>
            </ul>
            <form class="navbar-form" action="{{ action('PostsController@index') }}">
                <div class="form-group">
                    <input name="q" type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
