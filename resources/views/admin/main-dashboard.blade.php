<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dahsboard Admin - Hang Siji</title>
    @include('admin.partials.styling')
</head>
<body>
  <div class="container-scroller"> 
    @include('admin.partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('admin.partials.sidebar-skins')
      <!-- partial -->
      @include('admin.partials.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        @include('admin.partials.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.partials.script')
</body>

</html>