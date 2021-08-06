<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/img/apple-icon.png') }}">
      <link rel="icon" type="image/png" href="{{ asset('./assets/img/favicon.png') }}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
      <link href="{{ asset('./assets/css/nucleo-icons.css') }}" rel="stylesheet" />
      <link href="{{ asset('./assets/css/nucleo-svg.css') }}" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="{{ asset('./assets/kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
      <link href="{{ asset('./assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('./assets/css/soft-ui-dashboard.min2c70.css?v=1.0.3') }}" rel="stylesheet" />
    



  </head>
  <body>
    @inertia
  <script src="{{ asset('/js/app.js') }}" defer></script>
  <script src="{{ asset('./assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('./assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <!-- Kanban scripts -->
  <script src="{{ asset('./assets/js/plugins/dragula/dragula.min.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/jkanban/jkanban.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/chartjs.min.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/threejs.js') }}"></script>
  <script src="{{ asset('./assets/js/plugins/orbit-controls.js') }}"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
 
  <script src="{{ asset('./assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>

  </body>
</html>