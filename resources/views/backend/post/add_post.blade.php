@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Add Post
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Add Post</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('store.post') }}" enctype="multipart/form-data">
									@csrf

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Title <span style="color: red;">*</span></label>
										<input type="text" name="post_title" class="form-control @error('post_title')is-invalid @enderror" id="input1" placeholder="Post title">
                                        @error('post_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Author <span style="color: red;">*</span></label>
										<input type="text" name="author" class="form-control @error('author')is-invalid @enderror" id="input1" placeholder="Author">
                                        @error('author')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Email <span style="color: red;">*</span></label>
										<input type="email" name="author_email" class="form-control @error('author_email')is-invalid @enderror" id="input1" placeholder="Email">
                                        @error('author_email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Image <span style="color: red;">*</span></label>
										<input type="file" name="post_image" class="form-control @error('post_image')is-invalid @enderror" id="input1" onChange="mainThamUrl(this)">
										<div class="mt-2"></div>
											<img src="" id="mainThmb">
                                            @error('post_image')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Content <span style="color: red;">*</span></label>
										<textarea class="form-control @error('post_content')is-invalid @enderror" id="mytextarea" rows="5" name="post_content"></textarea>
                                        @error('post_content')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
</div>

 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    } 
 </script>


@endsection