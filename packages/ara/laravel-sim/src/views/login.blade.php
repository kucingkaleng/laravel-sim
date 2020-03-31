<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <style>
    .headline,
    .login-container {
      height: 100vh;
    }

    .login-container .card {
      width: 350px;
    }
  </style>
</head>
<body style="height: auto;">
  
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6 bg-primary headline">

      </div>
      <div class="col-lg-6 d-flex align-items-center justify-content-center login-container">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Please Sign In</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary d-block ml-auto">Sign In</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>