<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>CHTM Inventory</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Favicons -->
    </head>
    <body>
        <header>

            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">CHTM Inventory</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/equipment">Equipment <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/utensils">Utensils</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/borrowers">Borrowers</a>
                        </li>
                    </ul>
                    <ul style="margin: 0!important">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:white" 
                                href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Change Password</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                      </li>                        
                    </ul>
                </div>
            </nav>

        </header>
        <main role="main">
            <div class="container" style="margin-top: 100px">
                @yield('content')            
            </div>
        </main>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
