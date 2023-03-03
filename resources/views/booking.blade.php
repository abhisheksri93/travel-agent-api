@extends('layouts.app')
@section('content')


		
				<section role="main" class="content-body">
					<header class="page-header">
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
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
						
								<h2 class="card-title">Bookings</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a id="addToTable" href="{{route('add')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a id="addToTable" href="{{route('details')}}" class="btn btn-primary">Details <i class="fas fa-plus"></i></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>Refrence Id</th>
											<th>Booker Name</th>
											<th>Content</th>
											<th>Service</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr data-item-id="1">
											<td>SUNTR_KQ0871</td>
											<td>John Doe
											</td>
											<td>123456789</td>
											<td>ATS</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="on-default remove-row"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
	@endsection