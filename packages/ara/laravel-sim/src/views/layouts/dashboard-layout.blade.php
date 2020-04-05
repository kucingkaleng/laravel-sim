<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  @yield('style')
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse" style="height: auto;">
  
  <div class="wrapper">
    
    @includeFirst(['components.navbar', 'LaravelSim::components.navbar'])

    {{-- @includeFirst(['components.sidebar', 'LaravelSim::components.sidebar'], ['sidebar' => $shared->sidebar]) --}}

    {{ (new ARA\LaravelSim\Utils\BuildMe)->sidebar($shared->sidebar) }}

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
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>

  @yield('script')
</body>
</html>