@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Edit Movie
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Edit Movie</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('update.movie') }}" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$editMovie->id}}">
                                    <input type="hidden" name="old_img" value="{{$editMovie->movie_cover}}">
									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie Title </label>
										<input type="text" name="movie_title" class="form-control" id="input1" placeholder="Movie title" value="{{$editMovie->movie_title}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie URL</label>
										<input type="text" name="movie_url" class="form-control" id="input1" placeholder="Movie url" value="{{$editMovie->movie_url}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie Duration</label>
										<input type="number" name="movie_duration" class="form-control" id="input1" placeholder="Movie duration" value="{{$editMovie->id}}">
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Country</label>
										<select id="input7" class="form-select" name="country">
											<option value="{{$editMovie->country}}" {{$editMovie->country ? 'selected': ''}}>{{$editMovie->country}}</option>
											<option value="Nigeria">Nigeria</option>
											<option value="USA">USA</option>
											<option value="China">China</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="England">England</option>
                                            <option value="France">France</option>
										</select>
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input2" class="form-label">Genre </label>
										<select id="input7" class="form-select" name="genre_id">
											@foreach ($movieData as $item)
												<option value="{{$item->genre_id}}" {{$item->genre_id == $editMovie->genre_id ? 'selected' : ''}}>{{ $item->genre->genre}}</option>
											@endforeach
											
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Genre </label>
										<select id="input7" class="form-select" name="producer_id">
											@foreach ($movieData as $item)
												<option value="{{$item->producer_id}}" {{$item->producer_id == $editMovie->producer_id ? 'selected' : ''}}>{{ $item->producer->producer_name}}</option>
											@endforeach
											
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Movie Cover</label>
										<input type="file" name="movie_cover" class="form-control" id="image">
                                            
									</div>
									<div class="col-md-6">
										<div>
                                            <img src="{{asset($editMovie->movie_cover)}}" id="showImage" alt="" width="90px" height="90px">
                                        </div>
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Description</label>
										<textarea class="form-control" id="input11" rows="5" name="description">{{$editMovie->description}}</textarea>
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