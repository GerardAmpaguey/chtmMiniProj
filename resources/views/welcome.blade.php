<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Signin Template</title>
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Favicons -->
        <style>
          html, body{
            height: 100%
          }
        </style>

    </head>
    <body class="text-center">
      <div class="container" style="height:100%">
        <div class="row d-flex" style="height:100%;justify-content: center; align-items: center">
          <div class="col-sm-4">

            <form class="form-signin" action="/login" method="POST">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @csrf
                    <label for="inputEmail" class="sr-only" >Username:</label>
                    <input type="text" name='username' class="form-control" placeholder='Username'>
                    <label for="inputPassword" class="sr-only" >Password</label>
                    <input type="password" name="password" class="form-control" placeholder='Password'>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </body>
</html>