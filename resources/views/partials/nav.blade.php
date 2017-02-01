  <div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/posts/create">Create post</a>
        @if(!Auth::check())
          <a class="nav-link" href="/login">Log In</a>
        @endif

        @if(Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
            <a class="nav-link" href="/logout">Log Out</a>
        @endif
      </nav>
    </div>
  </div>