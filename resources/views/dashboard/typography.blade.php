@extends('dashboard.component.main')

@section('content')
<div class="content-wrapper">

						<!-- Row start -->
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<h1 class="mb-3">h1. Arise Admin Heading</h1>
										<h2 class="mb-3">h2. Arise Admin Heading</h2>
										<h3 class="mb-3">h3. Arise Admin Heading</h3>
										<h4 class="mb-3">h4. Arise Admin Heading</h4>
										<h5 class="mb-3">h5. Arise Admin Heading</h5>
										<h6 class="mb-3">h6. Arise Admin Heading</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<h1 class="mb-3 text-dark">h1. Arise Admin Heading</h1>
										<h2 class="mb-3 text-light">h2. Arise Admin Heading</h2>
										<h3 class="mb-3 text-red">h3. Arise Admin Heading</h3>
										<h4 class="mb-3 text-blue">h4. Arise Admin Heading</h4>
										<h5 class="mb-3 text-green">h5. Arise Admin Heading</h5>
										<h6 class="mb-3 text-yellow">h6. Arise Admin Heading</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<h1 class="display-1">Display 1</h1>
										<h1 class="display-2">Display 2</h1>
										<h1 class="display-3">Display 3</h1>
										<h1 class="display-4">Display 4</h1>
										<h1 class="display-5">Display 5</h1>
										<h1 class="display-6">Display 6</h1>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<h1 class="display-1 text-dark">Display 1</h1>
										<h1 class="display-2 text-light">Display 2</h1>
										<h1 class="display-3 text-red">Display 3</h1>
										<h1 class="display-4 text-blue">Display 4</h1>
										<h1 class="display-5 text-green">Display 5</h1>
										<h1 class="display-6 text-yellow">Display 6</h1>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<h3>Fancy display heading <small class="text-muted">with faded muted text</small>
										</h3>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<p>You can use the mark tag to <mark>highlight</mark> text.</p>
										<p><del>This line of text is meant to be treated as deleted text.</del></p>
										<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
										<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
										<p><u>This line of text will render as underlined.</u></p>
										<p><small>This line of text is meant to be treated as fine print.</small></p>
										<p><strong>This line rendered as bold text.</strong></p>
										<p><em>This line rendered as italicized text.</em></p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<figure>
											<blockquote class="blockquote">
												<p>A well-known quote, contained in a blockquote element.</p>
											</blockquote>
											<figcaption class="blockquote-footer">
												Someone famous in <cite title="Source Title">Source Title</cite>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<figure class="text-center">
											<blockquote class="blockquote">
												<p>A well-known quote, contained in a blockquote element.</p>
											</blockquote>
											<figcaption class="blockquote-footer">
												Someone famous in <cite title="Source Title">Source Title</cite>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<figure class="text-end">
											<blockquote class="blockquote">
												<p>A well-known quote, contained in a blockquote element.</p>
											</blockquote>
											<figcaption class="blockquote-footer">
												Someone famous in <cite title="Source Title">Source Title</cite>
											</figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<!-- Block level -->
										<div class="row">
											<div class="col-2 text-truncate">
												This text is quite long, and will be truncated once displayed.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="card">
									<div class="card-body">
										<!-- Inline level -->
										<span class="d-inline-block text-truncate" style="max-width: 150px;">
											This text is quite long, and will be truncated once displayed.
										</span>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="custom-link-group">
											<a href="#" class="text-primary">Primary link</a>
											<a href="#" class="text-secondary">Secondary link</a>
											<a href="#" class="text-green">Success link</a>
											<a href="#" class="text-red">Danger link</a>
											<a href="#" class="text-yellow">Warning link</a>
											<a href="#" class="text-blue">Info link</a>
											<a href="#" class="text-light">Light link</a>
											<a href="#" class="text-dark">Dark link</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
@endsection
