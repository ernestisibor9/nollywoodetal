@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Admin Dashboard
@endsection

<style>
	.stats{
		color: #fff;
		font-size: 50px;
	}
</style>

@php
		// $users = App\Models\User::where('role', 'user')->latest()->get();
		// $admin = App\Models\User::where('role', 'admin')->latest()->get();
		$movie = App\Models\Movie::latest()->get();
		$producer = App\Models\Producer::latest()->get();
		$post = App\Models\Post::latest()->get();
		$message = App\Models\Message::latest()->get();
@endphp

<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
                   <div class="col">
					 <div class="card radius-10 bg-gradient-cosmic">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="me-auto">
									<p class="mb-0 text-white">Total Movie</p>
									<h4 class="my-1 text-white">{{count($movie)}}</h4>
									<p class="mb-0 font-13 text-white"></p>
								</div>
                                <i class="fadeIn animated bx bx-film stats"></i>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 bg-gradient-ibiza">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-white">Total Producer</p>
								   <h4 class="my-1 text-white">{{count($producer)}}</h4>
								   <p class="mb-0 font-13 text-white"></p>
							   </div>
							   <i class="fadeIn animated bx bx-user-plus stats"></i>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 bg-gradient-ohhappiness">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-white">Total Post</p>
								   <h4 class="my-1 text-white">{{count($post)}}</h4>
								   <p class="mb-0 font-13 text-white"></p>
							   </div>
							   <i class="fadeIn animated bx bx-book stats"></i>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 bg-gradient-kyoto">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div class="me-auto">
								   <p class="mb-0 text-dark">Total Message</p>
								   <h4 class="my-1 text-dark">{{count($message)}}</h4>
								   <p class="mb-0 font-13 text-dark"></p>
							   </div>
							   <i class="fadeIn animated bx bx-comment-detail stats"></i>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->



				 <div class="card radius-10">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">List of Movies</h6>
							</div>
							<div class="dropdown ms-auto">
								<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:;">Action</a>
									</li>
									<li><a class="dropdown-item" href="javascript:;">Another action</a>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="javascript:;">Something else here</a>
									</li>
								</ul>
							</div>
						</div>
					 </div>
                         <div class="card-body">
							
						 <div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Movie Cover</th>
										<th>Movie Title</th>
										<th>Genre</th>
										<th>Producer</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($movie as $key => $item)
										<tr>
											<td>{{ $key + 1 }}</td>
											<td><img src="{{asset($item->movie_cover) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="60px" height="60px"></td>
											<td>{{ $item->movie_title }}</td>
											<td>{{ $item->genre->genre }}</td>
											<td>{{ $item->producer->producer_name }}</td>
                                            <td>{{ $item->country }}</td>										
										</tr>
						</div>
									@endforeach
								</tbody>
							</table>

							
					</div>


			</div>
		</div>

@endsection