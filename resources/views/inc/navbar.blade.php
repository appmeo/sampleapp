<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="/">Acme</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item  {{Request::is('/') ? 'active' : ''}} ">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item  {{Request::is('about') ? 'active' : ''}} ">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item  {{Request::is('contact') ? 'active' : ''}} ">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item  {{Request::is('messages') ? 'active' : ''}} ">
              <a class="nav-link" href="/messages">Messages</a>
            </li>
            
          </ul>
        </div>
    </div>
      </nav>