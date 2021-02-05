<nav class="navbar navbar navbar-inverse">
  <div class="container-fluid ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('blog.index')}}">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right ">
        <li>
          <a href="{{ route('user.post')}}" ><i class="far fa-newspaper"></i> Post</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users-cog"></i> User  Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @if(Auth::check())
           <li><a href="{{route('user.profile') }}"><i class="fas fa-id-badge"></i> Profile</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="{{route('user.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          @else
           <li><a href="{{route('user.signup') }}"><i class="fas fa-user-plus"></i> Sign up</a></li>
            <li><a href="{{route('user.signin') }}"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>
          @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>