@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Area</div>
									</div>
									<div class="card-body">
										<div id="basic-area-stack-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Candlestick</div>
									</div>
									<div class="card-body">
										<div id="basic-candlestick-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Column Stack</div>
									</div>
									<div class="card-body">
										<div id="basic-column-stack-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Column Stack Full Height</div>
									</div>
									<div class="card-body">
										<div id="basic-column-stack-graph-fullheight"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Bar Full Width</div>
									</div>
									<div class="card-body">
										<div id="basic-bar-stack-graph-full-width"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Area</div>
									</div>
									<div class="card-body">
										<div id="basic-area-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Spline Area</div>
									</div>
									<div class="card-body">
										<div id="basic-area-spline-graph"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Bar</div>
									</div>
									<div class="card-body">
										<div id="basic-bar-negative-values"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar</div>
									</div>
									<div class="card-body">
										<div id="basic-bar-graph" class="primary-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Bar Grouped</div>
									</div>
									<div class="card-body">
										<div id="basic-bar-graph-grouped"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Stacked Bar</div>
									</div>
									<div class="card-body">
										<div id="basic-bar-stack-graph"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Column</div>
									</div>
									<div class="card-body">
										<div id="basic-column-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Column Datatables</div>
									</div>
									<div class="card-body">
										<div id="basic-column-graph-datalables"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Basic Line</div>
									</div>
									<div class="card-body">
										<div id="basic-line-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Line Datalabels</div>
									</div>
									<div class="card-body">
										<div id="line-with-data-labels"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Dashed Line</div>
									</div>
									<div class="card-body">
										<div id="stepLineChart"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Donut</div>
									</div>
									<div class="card-body">
										<div id="basic-donut-graph" class="auto-align-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Pie</div>
									</div>
									<div class="card-body">
										<div id="basic-pie-graph" class="auto-align-graph"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Gradient</div>
									</div>
									<div class="card-body">
										<div id="basic-donut-graph-gradient"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Monochrome</div>
									</div>
									<div class="card-body">
										<div id="basic-donut-graph-monochrome"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Monochrome Gradient</div>
									</div>
									<div class="card-body">
										<div id="basic-donut-graph-monochrome-gradient"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Gradient</div>
									</div>
									<div class="card-body">
										<div id="basic-pie-graph-gradient"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Monochrome</div>
									</div>
									<div class="card-body">
										<div id="basic-pie-graph-monochrome"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Monochrome Gradient</div>
									</div>
									<div class="card-body">
										<div id="basic-pie-graph-monochrome-gradient"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
