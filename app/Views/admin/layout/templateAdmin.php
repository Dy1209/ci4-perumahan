<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendor/feather/feather.css">
  <link rel="stylesheet" href="/vendor/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/vendor/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/vendor/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/vendor/select2-bootstrap-theme/select2-bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/img/logoGosipp.png" />
</head>
<body>
  <div class="container-scroller">
<div class="container-fluid page-body-wrapper">


<?= $this->include('admin/layout/navbarAdmin'); ?>

<?= $this->renderSection('content'); ?>

</div>
</div>

<!-- partial:partials/_footer.html -->
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->

  <!-- plugins:js -->
    <script src="/vendor/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/vendor/chart.js/Chart.min.js"></script>
  <script src="/vendor/datatables.net/jquery.dataTables.js"></script>
  <script src="/vendor/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="/vendor/select2/select2.min.js"></script>
  <script src="/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <script src="/js/settings.js"></script>
  <script src="/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
  <script src="/js/Chart.roundedBarCharts.js"></script>
  <script src="/js/file-upload.js"></script>
  <script src="/js/typehead.js"></script>
  <script src="/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>


</html>