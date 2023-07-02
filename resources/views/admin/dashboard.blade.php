@extends('admin.maincontent')
@section('dashboard')
<div class="row col-md-12">
  <div class="clearfix hidden-md-up"></div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner mod">
        <h1>{{$fbcount}}<sup style="font-size: 20px"></sup></h1>
        <p>Feedback</p>
      </div>
      <div class="icon">
        <i class="ion ion-star"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner mod">
        <h1>{{$usercount}}</h1>
        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- /.col -->
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner mod">
        <h1>{{$counter}}</h1>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <!-- /.col -->
  <div class="card col-lg-5">
    <div class="card-header">
      <h3 class="card-title">Recently Feedbacks</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="products-list product-list-in-card pl-2 pr-2">
        @foreach($feedbacks as $f)
        <li class="item">
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">{{$f->customer_name}}
              <span class="float-right">{{$f->created_date}}</span></a>
            <span class="product-description">
            {{$f->content}}
            </span>
          </div>
        </li>
        @endforeach
        <!-- /.item -->        
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="{{url('admin/feedback')}}" class="uppercase">View All Feedback</a>
    </div>
    <!-- /.card-footer -->
  </div>
  <div class="card card-success col-lg-5" style="margin-left: 8em;">
    <div class="card-header">
      <h3 class="card-title">Visits vs Registers</h3>
    </div>
    <div class="card-body">
      <div class="chart">
        <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@push('active-script')
<script>
  $('#dashboard').addClass('active');
</script>
@endpush
@endsection