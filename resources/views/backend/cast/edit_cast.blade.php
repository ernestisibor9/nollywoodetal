@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Edit Cast
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Edit Cast</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('update.cast') }}" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$editCast->id}}">
									<div class="col-md-12 form-group">
										<label for="input1" class="form-label">Name of Cast</label>
										<input type="text" name="name_of_cast" class="form-control" id="input1" placeholder="Movie title" value="{{$editCast->name_of_cast}}">
									</div>
									<div class="col-md-12 form-group">
										<label for="input2" class="form-label">Movies </label>
										<select id="input7" class="form-select" name="movie_id">
											<option value="{{$editCast->movie_id}}" {{$editCast->movie_id ? 'selected': ''}}>{{$editCast->movie->movie_title}}</option>
											
                                            @foreach ($movies as $movie)
                                                <option value="{{$movie->id}}">{{$movie->movie_title}}</option>
                                            @endforeach
										</select>
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