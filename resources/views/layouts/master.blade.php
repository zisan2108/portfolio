<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nahiduzzaman Zisan Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <header>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Nahiduzzaman</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About Me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                
                 
                </ul>
               
              </div>
            </div>
          </nav>






    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <ul>
            <li><a href="https://github.com/zisan2108"><i class="fab fa-github"></i> GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/md-nahiduzzaman/"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            <!-- Add other social media links -->
        </ul>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
