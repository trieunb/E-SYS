@extends('layouts.master')
@section('sidebar')
    @includeIf('partials.sidebar_suco')
@endsection
@section('content')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class="pull-right">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-left">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
	<!-- start widget -->
	<div class="state-overview">
		<!-- <a href="/admin/pdf">Download PDF</a> -->
		<div class="row">
	        <div class="col-xl-3 col-md-6 col-12">
	          <div class="info-box bg-white">
	            <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">group</i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Appointments</span>
	              <span class="info-box-number">450</span>
	              <div class="progress">
	                <div class="progress-bar bg-primary" style="width: 45%"></div>
	              </div>
	              <span class="progress-description">
	                    45% Increase in 28 Days
	                  </span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	        <div class="col-xl-3 col-md-6 col-12">
	          <div class="info-box bg-white">
	            <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">New Patients</span>
	              <span class="info-box-number">155</span>
	              <div class="progress">
	                <div class="progress-bar bg-warning" style="width: 40%"></div>
	              </div>
	              <span class="progress-description">
	                    40% Increase in 28 Days
	                  </span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	        <div class="col-xl-3 col-md-6 col-12">
	          <div class="info-box bg-white">
	            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">content_cut</i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Operations</span>
	              <span class="info-box-number">52</span>
	              <div class="progress">
	                <div class="progress-bar bg-success" style="width: 85%"></div>
	              </div>
	              <span class="progress-description">
	                    85% Increase in 28 Days
	                  </span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	        <div class="col-xl-3 col-md-6 col-12">
	          <div class="info-box bg-white">
	            <span class="info-box-icon push-bottom bg-info"><i class="material-icons">monetization_on</i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Hospital Earning</span>
	              <span class="info-box-number">13,921</span><span>$</span>
	              <div class="progress">
	                <div class="progress-bar bg-info" style="width: 50%"></div>
	              </div>
	              <span class="progress-description">
	                    50% Increase in 28 Days
	                  </span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	      </div>
		</div>
	<!-- end widget -->
</div>
@endsection