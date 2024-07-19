@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">
	<!-- Row start -->
	<div class="row">
		<div class="col-xxl-3 col-sm-6 col-12">
			<div class="stats-tile">
				<div class="sale-icon shade-red">
					<i class="bi bi-pie-chart"></i>
				</div>
				<div class="sale-details">
					<h3 class="text-red">{{ $countBooking }}</h3>
					<p>Jumlah Pesanan Servis</p>
				</div>
			</div>
		</div>

		<div class="col-xxl-3 col-sm-6 col-12">
			<div class="stats-tile">
				<div class="sale-icon shade-blue">
					<i class="bi bi-emoji-smile"></i>
				</div>
				<div class="sale-details">
					<h3 class="text-blue">{{ $countTransaction }}</h3>
					<p>Jumlah Total Transaksi</p>
				</div>
			</div>
		</div>
		{{-- <div class="col-xxl-3 col-sm-6 col-12">
			<div class="stats-tile">
				<div class="sale-icon shade-yellow">
					<i class="bi bi-box-seam"></i>
				</div>
				<div class="sale-details">
					<h3 class="text-yellow">15k</h3>
					<p>Products</p>
				</div>
			</div>
		</div> --}}
		<div class="col-xxl-3 col-sm-6 col-12">
			<div class="stats-tile">
				<div class="sale-icon shade-green">
					<i class="bi bi-handbag"></i>
				</div>
				<div class="sale-details">
					<h3 class="text-green">Rp. {{$omzet}}</h3>
					<p>Total Pendapatan</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Row end -->

	<!-- Row start -->
	<div class="row">
		<div class="col-xxl-9  col-sm-12 col-12">

			<div class="card">
				<div class="card-body">
					<!-- Row start -->
					<div class="row">
						<div class="col-xxl-3 col-sm-4 col-12">
							<div class="reports-summary">
								<div class="reports-summary-block">
									<i class="bi bi-circle-fill text-primary me-2"></i>
									<div class="d-flex flex-column">
										<h6>Overall Sales</h6>
										<h5>12 Millions</h5>
									</div>
								</div>
								<div class="reports-summary-block">
									<i class="bi bi-circle-fill text-success me-2"></i>
									<div class="d-flex flex-column">
										<h6>Overall Earnings</h6>
										<h5>78 Millions</h5>
									</div>
								</div>
								<div class="reports-summary-block">
									<i class="bi bi-circle-fill text-danger me-2"></i>
									<div class="d-flex flex-column">
										<h6>Overall Revenue</h6>
										<h5>60 Millions</h5>
									</div>
								</div>
								<div class="reports-summary-block">
									<i class="bi bi-circle-fill text-warning me-2"></i>
									<div class="d-flex flex-column">
										<h6>New Customers</h6>
										<h5>23k</h5>
									</div>
								</div>
								<button class="btn btn-info download-reports">View Reports</button>
							</div>
						</div>
						<div class="col-xxl-9 col-sm-8 col-12">
							<div class="row">
								<div class="col-12">
									<div class="graph-day-selection mt-2" role="group">
										<button type="button" class="btn active">Today</button>
										<button type="button" class="btn">7 days</button>
									</div>
								</div>
								<div class="col-12">
									<div id="revenueGraph"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
			</div>

		</div>
	</div>
	<!-- Row end -->

	<!-- Row start -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Orders</div>
				</div>
				<div class="card-body">

					<div class="table-responsive">
						<table class="table v-middle">
							<thead>
								<tr>
									<th>Customer</th>
									<th>Product</th>
									<th>User ID</th>
									<th>Ordered Placed</th>
									<th>Amount</th>
									<th>Payment Status</th>
									<th>Order Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="media-box">
											<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Gallery">
											<div class="media-box-body">
												<div class="text-truncate">Ellie Collins</div>
											</div>
										</div>
									</td>
									<td>
										<div class="media-box">
											<img src="assets/images/food/img3.jpg" class="media-avatar" alt="Admin Themes">
											<div class="media-box-body">
												<div class="text-truncate">Ginger Snacks</div>
											</div>
										</div>
									</td>
									<td>Arise827</td>
									<td>12/12/2021</td>
									<td>$18.00</td>
									<td>
										<span class="text-green td-status"><i class="bi bi-check-circle"></i> Paid</span>
									</td>
									<td>
										<span class="badge shade-green min-90">Delivered</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="media-box">
											<img src="assets/images/user.png" class="media-avatar" alt="Bootstrap Gallery">
											<div class="media-box-body">
												<div class="text-truncate">Sophie Nguyen</div>
											</div>
										</div>
									</td>
									<td>
										<div class="media-box">
											<img src="assets/images/food/img6.jpg" class="media-avatar" alt="Admin Themes">
											<div class="media-box-body">
												<div class="text-truncate">Guava Sorbet</div>
											</div>
										</div>
									</td>
									<td>Arise253</td>
									<td>18/12/2021</td>
									<td>$32.00</td>
									<td>
										<span class="text-red td-status"><i class="bi bi-x-circle"></i> Failed</span>
									</td>
									<td>
										<span class="badge shade-red min-90">Cancelled</span>
									</td>
								</tr>
								<tr>
									<td>
										<div class="media-box">
											<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Gallery">
											<div class="media-box-body">
												<div class="text-truncate">Darcy Ryan</div>
											</div>
										</div>
									</td>
									<td>
										<div class="media-box">
											<img src="assets/images/food/img5.jpg" class="media-avatar" alt="Admin Themes">
											<div class="media-box-body">
												<div class="text-truncate">Gooseberry Surprise</div>
											</div>
										</div>
									</td>
									<td>Arise878</td>
									<td>22/12/2021</td>
									<td>$19.00</td>
									<td>
										<span class="text-blue td-status"><i class="bi bi-clock-history"></i> Awaiting</span>
									</td>
									<td>
										<span class="badge shade-blue min-90">Processing</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Row end -->

	<script>
        window.monthlyTransactions = @json($monthlyTransactions);
    </script>
    <script src="C:\Users\ahmad\bengkel\public\assets\vendor\apex\custom\sales\revenueGraph.js"></script>
</div>
@endsection
