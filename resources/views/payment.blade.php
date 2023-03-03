@extends('layouts.app')
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Editable</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
						
								<h2 class="card-title">Payments</h2>
							</header>
							<div class="card-body">
								
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>MerchantTxnId</th>
											<th>Booking_id</th>
											<th>charge_id</th>
											<th>Amount</th>
                                            <th>Currency</th>
											<th>Email</th>
											<th>Customer_ip</th>
											<th>ResponseMessage</th>
											<th>Status</th>
                                            <th>PaymentType</th>
											<th>Payment_gateway_id</th>
										</tr>
									</thead>
									<tbody>
										<tr data-item-id="1">
											<td>SUNTR_KQ0871</td>
											<td>John Doe</td>
											<td>123456789</td>
											<td>ATS</td>
                                            <td>SUNTR_KQ0871</td>
											<td>John Doe</td>
											<td>123456789</td>
											<td>ATS</td>
                                            <td>SUNTR_KQ0871</td>
											<td>John Doe</td>
											<td>123456789</td>
											<td>ATS</td>
											
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
	@endsection