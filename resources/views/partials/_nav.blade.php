
<!-- Default Bootstrap Navbar -->
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
         
        </div>
        <div class="jumbotron">
          <h1>Kristina</h1>
          <h2>Špoljarić</h2>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-center">
            <li class="@yield('ActiveInstagram')"><a href="https://www.instagram.com/kiki_sp711/?hl=hr" target="_blank"><img class="instagram" src="/images/instagram.png"></a></li>
            <li class="@yield('ActiveFacebook')"><a href="https://www.facebook.com/profile.php?id=1240106770" target="_blank"><img class="facebook" src="/images/facebook.png"></a></li>
            <li class="@yield('ActiveHome')"><a href="/">Home</a></li> 
            <li class="@yield('ActiveBlog')"><a href="/blog">Blog</a></li> 
            <li class="@yield('ActiveAbout')"><a href="/about">About</a></li>
            <li class="@yield('ActiveContact')"><a href="/contact">Contact</a></li>
          </ul>

          <ul class="nav navbar-right">
            @if (Auth::check())

            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ Auth::user()->name }}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index')}}">Posts</a></li>
                <li><a href=" {{ route('categories.index') }}">Categories</a></li>
                <li><a href=" {{ route('tags.index') }}">Tags</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </li>
            @else

             <!-- <a href=" " class="btn btn-default ">Login</a>-->
            @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>