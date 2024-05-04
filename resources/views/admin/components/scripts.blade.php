 <!-- plugins:js -->
 <script src="{{ asset('admin-assets') }}/vendors/js/vendor.bundle.base.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('admin-assets') }}/vendors/chart.js/Chart.min.js"></script>
 <script src="{{ asset('admin-assets') }}/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('admin-assets') }}/js/off-canvas.js"></script>
 <script src="{{ asset('admin-assets') }}/js/hoverable-collapse.js"></script>
 <script src="{{ asset('admin-assets') }}/js/misc.js"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="{{ asset('admin-assets') }}/js/dashboard.js"></script>
 <!-- End custom js for this page -->
 @stack('script')
