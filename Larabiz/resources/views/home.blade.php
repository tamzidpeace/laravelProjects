@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Dashboard
							<a href="/list/create" class="btn btn-primary pull-right">Add List</a>
						</h2></div>
					
					<div class="panel-body">
						@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
						@endif
						<h3>Your Listings</h3>
						@if (count($listings) > 0)
							
							<table class="table">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Update</th>
									<th scope="col">DELETE</th>
								</tr>
								</thead>
								<tbody>
								@foreach($listings as $list)
									<tr>
										<td>{{$list->id}}</td>
										<td><a href="#">{{$list->name}}</a></td>
										<td>
											<button type="submit" class="btn btn-info">Update</button>
										</td>
										<td>
											<button type="submit" class="btn btn-danger">Delete</button>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						
						@else
							<h4>No List Available</h4>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
