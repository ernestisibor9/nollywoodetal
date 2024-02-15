@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Change Password
@endsection

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Change Password</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">{{ $profileData->name }} Profile</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{ url('upload/no-image.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>{{ $profileData->name }}</h4>
												<p class="text-secondary mb-1">{{ $profileData->username }}</p>
											</div>
										</div>
										<hr class="my-4" />

									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card pt-3">
									<h5 class="text-center card-title">CHANGE PASSWORD</h5>
									<div class="card-body">
										<form action="{{ route('admin.password.update') }}" method="post" enctype="multipart/form-data">
												@csrf
										<div class="row mb-3">
												<div class="col-sm-3">
												<h6 class="mb-0">Old Password</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="password" class="form-control @error('old_password')
                                            is-invalid
                                            @enderror" name="old_password" />
                                                                </div>
                                                                @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                        @enderror
										</div>
										<div class="row mb-3">
												<div class="col-sm-3">
												<h6 class="mb-0">New Password</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="password" class="form-control @error('new_password')
                                                is-invalid
                                                @enderror" name="new_password" />
                                                                    </div>
                                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
										</div>
										<div class="row mb-3">
												<div class="col-sm-3">
												<h6 class="mb-0">Confirm Password</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="password" class="form-control" name="new_password_confirmation" @error('new_password_confirmation')
                                                is-invalid
                                                @enderror/>
                                                                            @error('new_password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                            @enderror
											</div>
										</div>

										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Change Password" />
											</div>
										</div>
											</form>
											
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
{{-- 
<script>
        $(document).ready(function(){
          $('#image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
              $('#showImage').attr('src',e.target.result)
            }
            reader.readAsDataURL(e.target.files['0']);
          })
        })
      </script> --}}
@endsection