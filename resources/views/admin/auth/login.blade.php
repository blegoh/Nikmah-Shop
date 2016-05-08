<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nikmah Shoes - Login</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="/themify-icons/themify-icons.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="/css/umega.css">

  </head>
  <body class="user-page">
    <h1 class="fw-600 mt-0 mb-20">Nikmah Shoes</h1>
    <form method="post" action="/admin/login" class="form-horizontal">
      {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <div class="col-xs-12">
          <input name="username" type="text" aria-describedby="exampleInputEmail" placeholder="Username" class="form-control rounded"><span aria-hidden="true" class="ti-user form-control-feedback"></span><span id="exampleInputEmail" class="sr-only">(default)</span>
        </div>
      </div>
      <div class="form-group has-feedback">
        <div class="col-xs-12">
          <input name="password" type="password" aria-describedby="exampleInputPassword" placeholder="Password" class="form-control rounded"><span aria-hidden="true" class="ti-key form-control-feedback"></span><span id="exampleInputPassword" class="sr-only">(default)</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-12">
          <div class="checkbox-inline checkbox-custom pull-left">
            <input id="exampleCheckboxRemember" type="checkbox" value="remember" name="remember">
            <label for="exampleCheckboxRemember">Remember me</label>
          </div>
          
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success btn-raised btn-block">Sign In</button>
    </form>
    

    <!-- jQuery-->
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </body>
</html>