<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Brand</a>
    </div> 

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>

       <ul class="nav navbar-nav navbar-right">
       @if ($currentUser)
          <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="nav-gravatar" src="{{ $currentUser->present()->gravatar() }}" alt="{{ $currentUser->username }}">

              {{ $currentUser->username }} 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li class="divider"></li>
              <li>{{ link_to_route('logout_path','Log Out') }}</li>
            </ul>
          </li>
        @else
          <li><a href="/login">Log In</a></li>
        @endif
      </ul>

     </div>

  </div>
</nav>