@extends('layouts.customer')



@section('title')
Dashboard | Customer PBD | Shipments
@endsection

@section('content')
<div class="main-panel" id="main-panel">
@csrf
    <div class="panel-header panel-header-lg">
      <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
      <div class="row">


      <div class="col-lg-12">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">SHIPMENT LIST</h5>
            <button type="submit" class="btn btn-primary">
                {{ __('Add Shipment Details') }}
            </button>
            <h4 class="card-title"></h4>
               <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Created</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Items#</th>
                        <th scope="col">Item Status</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>

          </div>
        </div>
      </div>

    </div>

    </div>
@endsection


@section('scripts')
    <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endsection
