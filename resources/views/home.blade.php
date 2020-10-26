@extends('layouts.customer')



@section('title')
Dashboard | Customer PBD
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
              <h5 class="card-category">Box</h5>
              <h4 class="card-title">Add Boxes</h4>
         <div class="card-body">
            <form method="POST" action="">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Box') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Express</option>
                            <option>Box</option>
                          </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Box') }}
                        </button>
                    </div>
                </div>
            </form>

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
