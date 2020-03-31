<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse" style="height: auto;">
  
  <div class="wrapper">
    
    @include('components.navbar')

    @include('components.sidebar')

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <h1>ARA Laravel SIM</h1>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>