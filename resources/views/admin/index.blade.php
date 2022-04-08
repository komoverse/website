@extends('admin.template')
@section('content')
<div class="container-fluid p-0">

	<h3>Dashboard (Data From Google Analytics API)</h3>
	<div class="row">

		<div class="col-12">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<h5 class="card-title mb-0">Last 28 Days Visitor Data</h5>
				</div>
				<div class="card-body py-3">
					<div class="chart chart-sm">
						<canvas id="chartjs-dashboard-line"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<h5 class="card-title mb-0">Last 28 Days Most Viewed Page</h5>
				</div>
				<div class="card-body py-3">
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Page Title</th>
								<th>Views</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($most_visit as $row)
							<tr>
								<td>
									<a href="https://komoverse.io{{ $row->url }}" target="_blank">{{ $row->url }}</a>
								</td>
								<td>
									{{ $row->pageViews }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6">
			<div class="card flex-fill w-100">
				<div class="card-header">

					<h5 class="card-title mb-0">Browser Usage</h5>
				</div>
				<div class="card-body d-flex">
					<div class="align-self-center w-100">
						<div class="py-3">
							<div class="chart chart-xs">
								<canvas id="chartjs-dashboard-pie"></canvas>
							</div>
						</div>

						<table class="table mb-0">
							<tbody>
								@foreach($browser as $row)
								<tr>
									<td>{{ $row->browser }}</td>
									<td>{{ $row->sessions }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<h5 class="card-title mb-0">Last 28 Days Visitor Geo</h5>
				</div>
				<div class="card-body py-3">
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Country</th>
								<th>Visitor</th>
							</tr>
						</thead>
						<tbody>
							@php
								$x = 0;
							@endphp
							@foreach ($country['rows'] as $row)
							@if ($x < 10)
							<tr>
								<td>
									{{ $row[0] }}
								</td>
								<td>
									{{ $row[1] }}
								</td>
							</tr>
							@endif
							@php
								$x++;
							@endphp
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-6">
			<div class="card flex-fill w-100">
				<div class="card-header">
					<h5 class="card-title mb-0">Last 28 Days Top Referrer</h5>
				</div>
				<div class="card-body py-3">
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>URL</th>
								<th>Page View</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($referrer as $row)
							<tr>
								<td>
									<a href="{{ $row->url }}" target="_blank">{{ $row->url }}</a>
								</td>
								<td>
									{{ $row->pageViews }}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
	<?php
		$view_label = null;
		$view_data = null;
		$view_visitor = null;
		foreach ($total_view as $row):
			if ($view_label == null) {
				$view_label = '"'.date('d M', strtotime($row->date)).'"';
				$view_data = $row->pageViews;
				$view_visitor = $row->visitors;
			} else {
				$view_label = $view_label.',"'.date('d M',strtotime($row->date)).'"';
				$view_data = $view_data.','.$row->pageViews;
				$view_visitor = $view_visitor.','.$row->visitors;
			}
		endforeach;
	?>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(150, 150, 255, 1)");
			gradient.addColorStop(1, "rgba(150, 150, 255, 0)");
			var red_gradient = ctx.createLinearGradient(0, 0, 0, 225);
			red_gradient.addColorStop(0, "rgba(215, 0, 0, 1)");
			red_gradient.addColorStop(1, "rgba(215, 0, 0, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: [{!! $view_label !!}],
					datasets: [{
						label: "Page View",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [{{ $view_data }}]
					},{
						label: "Visitor Count",
						fill: true,
						backgroundColor: red_gradient,
						borderColor: window.theme.danger,
						data: [{{ $view_visitor }}]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: true
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 100
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
	<?php
		$browser_label = null;
		$browser_data = null;
		foreach ($browser as $row):
			if ($browser_label == null) {
				$browser_label = '"'.$row->browser.'"';
				$browser_data = $row->sessions;
			} else {
				$browser_label = $browser_label.',"'.$row->browser.'"';
				$browser_data = $browser_data.','.$row->sessions;
			}
		endforeach;
	?>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: [{!! $browser_label !!}],
					datasets: [{
						data: [{{ $browser_data }}],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.info,
							window.theme.dark,
							window.theme.secondary
						],
						borderWidth: 1
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 50
				}
			});
		});
	</script>