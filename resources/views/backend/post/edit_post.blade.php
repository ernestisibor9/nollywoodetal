@extends('admin.admin_dashboard')

@section('admin')

{{-- @section('title')
	Felicity Properties - Add Property
@endsection --}}

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Edit Post</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('update.post') }}" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$editPost->id}}">
                                    <input type="hidden" name="old_img" value="{{$editPost->post_image}}">

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Title</label>
										<input type="text" name="post_title" class="form-control " id="input1" value="{{$editPost->post_title}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Author </label>
										<input type="text" name="author" class="form-control " id="input1" value="{{$editPost->author}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Email </label>
										<input type="email" name="author_email" class="form-control " id="input1" value="{{$editPost->author_email}}">
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Image</label>
										<input type="file" name="post_image" class="form-control" id="image">
                                            
									</div>
									<div class="col-md-6">
										<div>
                                            <img src="{{asset($editPost->post_image)}}" id="showImage" alt="" width="90px" height="90px">
                                        </div>
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Content </label>
										<textarea class="form-control" id="mytextarea" rows="5" name="post_content">{!!$editPost->post_content!!}</textarea>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
</div>

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
  </script>


@endsection