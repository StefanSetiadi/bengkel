@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">

							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="areaChart" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="xLabelsDiagonally" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="dayData" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="negativeValues" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="donutColors" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="donutFormatter" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div id="stackedBarChart" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div id="morrisBarChart" class="chart-height"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-body">
										<div id="barColors" class="chart-height"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
