@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
											title="Tooltip on top">
											Tooltip on top
										</button>
										<button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="right"
											title="Tooltip on right">
											Tooltip on right
										</button>
										<button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom"
											title="Tooltip on bottom">
											Tooltip on bottom
										</button>
										<button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="left"
											title="Tooltip on left">
											Tooltip on left
										</button>
										<button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-html="true"
											title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
											Tooltip with HTML
										</button>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="tooltip"
											data-bs-placement="top" title="Print">
											<i class="bi bi-printer"></i>
										</button>
										<button type="button" class="btn btn-danger btn-icon" data-bs-toggle="tooltip"
											data-bs-placement="top" title="Play">
											<i class="bi bi-play-circle"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<button type="button" class="btn btn-danger" data-bs-container="body" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-content="Top popover">
											Popover on top
										</button>
										<button type="button" class="btn btn-info" data-bs-container="body" data-bs-toggle="popover"
											data-bs-placement="right" data-bs-content="Right popover">
											Popover on right
										</button>
										<button type="button" class="btn btn-success" data-bs-container="body" data-bs-toggle="popover"
											data-bs-placement="bottom" data-bs-content="Bottom popover">
											Popover on bottom
										</button>
										<button type="button" class="btn btn-warning" data-bs-container="body" data-bs-toggle="popover"
											data-bs-placement="left" data-bs-content="Left popover">
											Popover on left
										</button>
										<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
											data-bs-content="Disabled popover">
											<button class="btn btn-primary" type="button" disabled>Disabled button</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-xxl-12">
								<div class="card">
									<div class="card-body">
										<a tabindex="0" class="btn btn-lg btn-secondary" role="button" data-bs-toggle="popover"
											data-bs-trigger="focus" title="Dismissible popover"
											data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
											popover</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
